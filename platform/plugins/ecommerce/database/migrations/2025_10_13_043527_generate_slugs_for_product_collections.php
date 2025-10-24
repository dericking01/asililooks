<?php

use Botble\Ecommerce\Models\ProductCollection;
use Botble\Slug\Models\Slug;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

return new class () extends Migration {
    public function up(): void
    {
        $collections = ProductCollection::all();

        foreach ($collections as $collection) {
            $existingSlug = Slug::query()->where('reference_type', ProductCollection::class)
                ->where('reference_id', $collection->id)
                ->first();

            if (! $existingSlug) {
                $slugValue = $collection->slug ?: Str::slug($collection->name);

                $baseSlug = $slugValue;
                $counter = 1;

                while (Slug::query()->where('key', $slugValue)
                    ->where('prefix', 'collections')
                    ->exists()) {
                    $slugValue = $baseSlug . '-' . $counter;
                    $counter++;
                }

                Slug::query()->create([
                    'reference_type' => ProductCollection::class,
                    'reference_id' => $collection->id,
                    'key' => $slugValue,
                    'prefix' => 'collections',
                ]);

                if (! $collection->slug) {
                    $collection->slug = $slugValue;
                    $collection->save();
                }
            }
        }
    }

    public function down(): void
    {
        Slug::query()->where('reference_type', ProductCollection::class)->delete();
    }
};
