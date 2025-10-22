<?php

namespace Botble\Location\Exporters;

use Botble\Base\Enums\BaseStatusEnum;
use Botble\DataSynchronize\Exporter\ExportColumn;
use Botble\DataSynchronize\Exporter\ExportCounter;
use Botble\DataSynchronize\Exporter\Exporter;
use Botble\Language\Facades\Language;
use Botble\Location\Enums\ImportType;
use Botble\Location\Models\City;
use Botble\Location\Models\Country;
use Botble\Location\Models\State;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class LocationExporter extends Exporter
{
    protected int $chunkSize = 200;

    protected bool $useChunkedExport = true;

    protected bool $optimizeQueries = true;

    protected ?string $importType = null;

    protected ?string $status = null;

    protected bool $streamingMode = false;

    public function getLabel(): string
    {
        return trans('plugins/location::location.name');
    }

    public function columns(): array
    {
        $columns = [
            ExportColumn::make('name'),
            ExportColumn::make('slug'),
            ExportColumn::make('abbreviation'),
            ExportColumn::make('state'),
            ExportColumn::make('country'),
            ExportColumn::make('import_type')
                ->dropdown(ImportType::values()),
            ExportColumn::make('status')
                ->dropdown(BaseStatusEnum::values()),
            ExportColumn::make('order'),
            ExportColumn::make('nationality'),
        ];

        if (defined('LANGUAGE_MODULE_SCREEN_NAME') && defined('LANGUAGE_ADVANCED_MODULE_SCREEN_NAME')) {
            $defaultLanguage = Language::getDefaultLanguage(['lang_code'])?->lang_code;
            $supportedLocales = Language::getSupportedLocales();

            foreach ($supportedLocales as $properties) {
                if ($properties['lang_code'] != $defaultLanguage) {
                    $columns[] = ExportColumn::make('name_' . $properties['lang_code'])
                        ->label('Name (' . strtoupper($properties['lang_code']) . ')');
                }
            }
        }

        return $columns;
    }

    public function counters(): array
    {
        $countries = Country::query()->count();
        $states = State::query()->count();
        $cities = City::query()->count();

        return [
            ExportCounter::make()
                ->label(trans('plugins/location::location.export.total'))
                ->value(number_format($countries + $states + $cities)),
            ExportCounter::make()
                ->label(trans('plugins/location::location.export.total_countries'))
                ->value(number_format($countries)),
            ExportCounter::make()
                ->label(trans('plugins/location::location.export.total_states'))
                ->value(number_format($states)),
            ExportCounter::make()
                ->label(trans('plugins/location::location.export.total_cities'))
                ->value(number_format($cities)),
        ];
    }

    public function hasDataToExport(): bool
    {
        return Country::query()->exists() && State::query()->exists() && City::query()->exists();
    }

    public function collection(): Collection
    {
        if ($this->useChunkedExport) {
            return $this->getChunkedCollection();
        }

        return $this->getAllLocations();
    }

    protected function getChunkedCollection(): Collection
    {
        $locations = collect();

        DB::disableQueryLog();
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '512M');

        $processedCount = 0;

        // First, process all countries (if not filtered out)
        if (! $this->importType || $this->importType === 'country') {
            $lastCountryId = 0;
            do {
                $countries = $this->getCountriesQuery()
                    ->where('id', '>', $lastCountryId)
                    ->orderBy('id')
                    ->limit($this->chunkSize)
                    ->get();

                if ($countries->isEmpty()) {
                    break;
                }

                foreach ($countries as $country) {
                    $locations->push($this->formatCountryRow($country));
                }

                $lastCountryId = $countries->last()->getKey();
                $processedCount += $countries->count();

                if ($processedCount % 500 === 0) {
                    $this->freeMemory();
                }
            } while ($countries->count() === $this->chunkSize);
        }

        // Then, process all states (if not filtered out)
        if (! $this->importType || $this->importType === 'state') {
            $lastStateId = 0;
            do {
                $query = State::query()
                    ->where('id', '>', $lastStateId)
                    ->oldest('id')
                    ->limit($this->chunkSize)
                    ->with(['country:id,name']);

                if ($this->optimizeQueries) {
                    $query->select(['id', 'name', 'slug', 'abbreviation', 'country_id', 'status', 'order']);
                }

                if ($this->status) {
                    $query->where('status', $this->status);
                }

                $statesWith = $this->getOptimizedRelationships('state');
                if (! empty($statesWith)) {
                    $query->with($statesWith);
                }

                $states = $query->get();

                if ($states->isEmpty()) {
                    break;
                }

                foreach ($states as $state) {
                    $locations->push($this->formatStateRowSimple($state));
                }

                $lastStateId = $states->last()->getKey();
                $processedCount += $states->count();

                if ($processedCount % 500 === 0) {
                    $this->freeMemory();
                }
            } while ($states->count() === $this->chunkSize);
        }

        // Finally, process all cities (if not filtered out)
        if (! $this->importType || $this->importType === 'city') {
            $lastCityId = 0;
            do {
                $query = City::query()
                    ->where('id', '>', $lastCityId)
                    ->oldest('id')
                    ->limit($this->chunkSize)
                    ->with(['state:id,name', 'country:id,name']);

                if ($this->optimizeQueries) {
                    $query->select(['id', 'name', 'slug', 'state_id', 'country_id', 'status', 'order']);
                }

                if ($this->status) {
                    $query->where('status', $this->status);
                }

                $citiesWith = $this->getOptimizedRelationships('city');
                if (! empty($citiesWith)) {
                    $query->with($citiesWith);
                }

                $cities = $query->get();

                if ($cities->isEmpty()) {
                    break;
                }

                foreach ($cities as $city) {
                    $locations->push($this->formatCityRowSimple($city));
                }

                $lastCityId = $cities->last()->getKey();
                $processedCount += $cities->count();

                if ($processedCount % 500 === 0) {
                    $this->freeMemory();
                }
            } while ($cities->count() === $this->chunkSize);
        }

        DB::enableQueryLog();

        return $locations;
    }

    protected function getAllLocations(): Collection
    {
        $supportedLocales = [];
        $defaultLanguage = null;

        if (defined('LANGUAGE_MODULE_SCREEN_NAME') && defined('LANGUAGE_ADVANCED_MODULE_SCREEN_NAME')) {
            $defaultLanguage = Language::getDefaultLanguage(['lang_code'])?->lang_code;

            $supportedLocales = Language::getSupportedLocales();
        }

        $with = [
            'states',
            'states.cities',
        ];

        if (count($supportedLocales)) {
            $with = [
                'translations',
                'states',
                'states.cities',
                'states.translations',
                'states.cities.translations',
            ];
        }

        $countries = Country::query()->with($with)->get();

        $locations = collect();

        foreach ($countries as $country) {
            $countryData = [
                'name' => $country->name,
                'slug' => $country->slug ?: Str::slug($country->name),
                'abbreviation' => '',
                'state' => '',
                'country' => '',
                'import_type' => 'country',
                'status' => $country->status,
                'order' => $country->order ?: 0,
                'nationality' => $country->nationality,
            ];

            foreach ($supportedLocales as $properties) {
                if ($properties['lang_code'] != $defaultLanguage) {
                    $translatedCountry = $country
                        ->translations
                        ->where('lang_code', $properties['lang_code'])
                        ->get('name');

                    if (! $translatedCountry) {
                        $translatedCountry = $country->name;
                    }

                    $countryData['name_' . $properties['lang_code']] = $translatedCountry;
                }
            }

            $locations->push($countryData);

            foreach ($country->states as $state) {
                $stateData = [
                    'name' => $state->name,
                    'slug' => $state->slug ?: Str::slug($state->name),
                    'abbreviation' => $state->abbreviation,
                    'state' => '',
                    'country' => $country->name,
                    'import_type' => 'state',
                    'status' => $state->status,
                    'order' => $state->order ?: 0,
                    'nationality' => '',
                ];

                foreach ($supportedLocales as $properties) {
                    if ($properties['lang_code'] != $defaultLanguage) {
                        $translatedState = $state
                            ->translations
                            ->where('lang_code', $properties['lang_code'])
                            ->get('name');

                        if (! $translatedState) {
                            $translatedState = $state->name;
                        }

                        $stateData['name_' . $properties['lang_code']] = $translatedState;
                    }
                }

                $locations->push($stateData);

                foreach ($state->cities as $city) {
                    $cityData = [
                        'name' => $city->name,
                        'slug' => $city->slug ?: Str::slug($state->name),
                        'abbreviation' => '',
                        'state' => $state->name,
                        'country' => $city->country->name,
                        'import_type' => 'city',
                        'status' => $city->status,
                        'order' => $city->order ?: 0,
                        'nationality' => '',
                    ];

                    foreach ($supportedLocales as $properties) {
                        if ($properties['lang_code'] != $defaultLanguage) {
                            $translatedCity = $city
                                ->translations
                                ->where('lang_code', $properties['lang_code'])
                                ->get('name');

                            if (! $translatedCity) {
                                $translatedCity = $city->name;
                            }

                            $cityData['name_' . $properties['lang_code']] = $translatedCity;
                        }
                    }

                    $locations->push($cityData);
                }
            }
        }

        return $locations;
    }

    protected function getCountriesQuery()
    {
        $query = Country::query();

        if ($this->optimizeQueries) {
            $query->select(['id', 'name', 'status', 'order', 'nationality']);
        }

        if ($this->status) {
            $query->where('status', $this->status);
        }

        $with = $this->getOptimizedRelationships('country');

        if (! empty($with)) {
            $query->with($with);
        }

        return $query;
    }

    protected function getStatesQuery(int $countryId)
    {
        $query = State::query()->where('country_id', $countryId);

        if ($this->optimizeQueries) {
            $query->select(['id', 'name', 'slug', 'abbreviation', 'country_id', 'status', 'order']);
        }

        if ($this->status) {
            $query->where('status', $this->status);
        }

        $with = $this->getOptimizedRelationships('state');

        if (! empty($with)) {
            $query->with($with);
        }

        return $query;
    }

    protected function getCitiesQuery(int $stateId)
    {
        $query = City::query()->where('state_id', $stateId);

        if ($this->optimizeQueries) {
            $query->select(['id', 'name', 'slug', 'state_id', 'country_id', 'status', 'order']);
        }

        if ($this->status) {
            $query->where('status', $this->status);
        }

        $with = $this->getOptimizedRelationships('city');

        if (! empty($with)) {
            $query->with($with);
        }

        return $query;
    }

    protected function getOptimizedRelationships(string $type): array
    {
        if (! defined('LANGUAGE_MODULE_SCREEN_NAME') || ! defined('LANGUAGE_ADVANCED_MODULE_SCREEN_NAME')) {
            return [];
        }

        if (! $this->optimizeQueries) {
            return ['translations'];
        }

        // Translation tables use the plural form + _id (e.g., countries_id, states_id, cities_id)
        $foreignKey = match ($type) {
            'country' => 'countries_id',
            'state' => 'states_id',
            'city' => 'cities_id',
            default => $type . 's_id',
        };

        return ['translations:lang_code,name,' . $foreignKey];
    }

    protected function formatCountryRow(Country $country): array
    {
        $data = [
            'name' => $country->name,
            'slug' => Str::slug($country->name),
            'abbreviation' => '',
            'state' => '',
            'country' => '',
            'import_type' => 'country',
            'status' => $country->status,
            'order' => $country->order ?: 0,
            'nationality' => $country->nationality,
        ];

        return $this->addTranslations($data, $country);
    }

    protected function formatStateRow(State $state, Country $country): array
    {
        $data = [
            'name' => $state->name,
            'slug' => $state->slug ?: Str::slug($state->name),
            'abbreviation' => $state->abbreviation,
            'state' => '',
            'country' => $country->name,
            'import_type' => 'state',
            'status' => $state->status,
            'order' => $state->order ?: 0,
            'nationality' => '',
        ];

        return $this->addTranslations($data, $state);
    }

    protected function formatStateRowSimple(State $state): array
    {
        $data = [
            'name' => $state->name,
            'slug' => $state->slug ?: Str::slug($state->name),
            'abbreviation' => $state->abbreviation,
            'state' => '',
            'country' => $state->country?->name ?? '',
            'import_type' => 'state',
            'status' => $state->status,
            'order' => $state->order ?: 0,
            'nationality' => '',
        ];

        return $this->addTranslations($data, $state);
    }

    protected function formatCityRow(City $city, State $state, Country $country): array
    {
        $data = [
            'name' => $city->name,
            'slug' => $city->slug ?: Str::slug($city->name),
            'abbreviation' => '',
            'state' => $state->name,
            'country' => $country->name,
            'import_type' => 'city',
            'status' => $city->status,
            'order' => $city->order ?: 0,
            'nationality' => '',
        ];

        return $this->addTranslations($data, $city);
    }

    protected function formatCityRowSimple(City $city): array
    {
        $data = [
            'name' => $city->name,
            'slug' => $city->slug ?: Str::slug($city->name),
            'abbreviation' => '',
            'state' => $city->state?->name ?? '',
            'country' => $city->country?->name ?? '',
            'import_type' => 'city',
            'status' => $city->status,
            'order' => $city->order ?: 0,
            'nationality' => '',
        ];

        return $this->addTranslations($data, $city);
    }

    protected function addTranslations(array $data, $model): array
    {
        if (! defined('LANGUAGE_MODULE_SCREEN_NAME') || ! defined('LANGUAGE_ADVANCED_MODULE_SCREEN_NAME')) {
            return $data;
        }

        $defaultLanguage = Language::getDefaultLanguage(['lang_code'])?->lang_code;
        $supportedLocales = Language::getSupportedLocales();

        foreach ($supportedLocales as $properties) {
            if ($properties['lang_code'] != $defaultLanguage) {
                $translation = $model->translations
                    ->where('lang_code', $properties['lang_code'])
                    ->first();

                $data['name_' . $properties['lang_code']] = $translation?->name ?? $model->name;
            }
        }

        return $data;
    }

    protected function freeMemory(): void
    {
        if (gc_enabled()) {
            gc_collect_cycles();
        }

        DB::disconnect();
        DB::reconnect();
    }

    public function setChunkSize(int $size): self
    {
        $this->chunkSize = $size;

        return $this;
    }

    public function useChunkedExport(bool $use = true): self
    {
        $this->useChunkedExport = $use;

        return $this;
    }

    public function getChunkSize(): int
    {
        return $this->chunkSize;
    }

    public function setOptimizeQueries(bool $optimize): self
    {
        $this->optimizeQueries = $optimize;

        return $this;
    }

    public function setImportType(?string $importType): self
    {
        $this->importType = $importType;

        return $this;
    }

    public function setStatus(?string $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function enableStreamingMode(bool $enable = true): self
    {
        $this->streamingMode = $enable;

        if ($enable) {
            $this->optimizeChunkSize();
        }

        return $this;
    }

    public function isStreamingMode(): bool
    {
        return $this->streamingMode;
    }

    public function streamingGenerator(): \Generator
    {
        DB::disableQueryLog();
        ini_set('max_execution_time', 0);
        ini_set('memory_limit', '256M');

        // Stream countries if not filtered out
        if (! $this->importType || $this->importType === 'country') {
            $lastCountryId = 0;
            do {
                $countries = $this->getCountriesQuery()
                    ->where('id', '>', $lastCountryId)
                    ->orderBy('id')
                    ->limit($this->chunkSize)
                    ->get();

                if ($countries->isEmpty()) {
                    break;
                }

                foreach ($countries as $country) {
                    yield $this->formatCountryRow($country);
                }

                $lastCountryId = $countries->last()->getKey();
                $this->freeMemory();
            } while ($countries->count() === $this->chunkSize);
        }

        // Stream states if not filtered out
        if (! $this->importType || $this->importType === 'state') {
            $lastStateId = 0;
            do {
                $query = State::query()
                    ->where('id', '>', $lastStateId)
                    ->oldest('id')
                    ->limit($this->chunkSize)
                    ->with(['country:id,name']);

                if ($this->optimizeQueries) {
                    $query->select(['id', 'name', 'slug', 'abbreviation', 'country_id', 'status', 'order']);
                }

                if ($this->status) {
                    $query->where('status', $this->status);
                }

                $statesWith = $this->getOptimizedRelationships('state');
                if (! empty($statesWith)) {
                    $query->with($statesWith);
                }

                $states = $query->get();

                if ($states->isEmpty()) {
                    break;
                }

                foreach ($states as $state) {
                    yield $this->formatStateRowSimple($state);
                }

                $lastStateId = $states->last()->getKey();
                $this->freeMemory();
            } while ($states->count() === $this->chunkSize);
        }

        // Stream cities if not filtered out
        if (! $this->importType || $this->importType === 'city') {
            $lastCityId = 0;
            do {
                $query = City::query()
                    ->where('id', '>', $lastCityId)
                    ->oldest('id')
                    ->limit($this->chunkSize)
                    ->with(['state:id,name', 'country:id,name']);

                if ($this->optimizeQueries) {
                    $query->select(['id', 'name', 'slug', 'state_id', 'country_id', 'status', 'order']);
                }

                if ($this->status) {
                    $query->where('status', $this->status);
                }

                $citiesWith = $this->getOptimizedRelationships('city');
                if (! empty($citiesWith)) {
                    $query->with($citiesWith);
                }

                $cities = $query->get();

                if ($cities->isEmpty()) {
                    break;
                }

                foreach ($cities as $city) {
                    yield $this->formatCityRowSimple($city);
                }

                $lastCityId = $cities->last()->getKey();
                $this->freeMemory();
            } while ($cities->count() === $this->chunkSize);
        }

        DB::enableQueryLog();
    }

    protected function optimizeChunkSize(): void
    {
        $totalCount = 0;

        if (! $this->importType || $this->importType === 'country') {
            $totalCount += Country::query()->when($this->status, fn ($q) => $q->where('status', $this->status))->count();
        }

        if (! $this->importType || $this->importType === 'state') {
            $totalCount += State::query()->when($this->status, fn ($q) => $q->where('status', $this->status))->count();
        }

        if (! $this->importType || $this->importType === 'city') {
            $totalCount += City::query()->when($this->status, fn ($q) => $q->where('status', $this->status))->count();
        }

        if ($totalCount > 50000) {
            $this->chunkSize = 100;
        } elseif ($totalCount > 30000) {
            $this->chunkSize = 150;
        } elseif ($totalCount > 20000) {
            $this->chunkSize = 200;
        } elseif ($totalCount > 10000) {
            $this->chunkSize = 250;
        } elseif ($totalCount > 5000) {
            $this->chunkSize = 300;
        } else {
            $this->chunkSize = 400;
        }
    }

    protected function getView(): string
    {
        return 'plugins/location::export';
    }
}
