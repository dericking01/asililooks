<?php

use Botble\Ecommerce\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        @ini_set('memory_limit', '512M');
        DB::disableQueryLog();

        $chunkSize = 500;

        DB::table('ec_products')
            ->whereNull('slug')
            ->oldest('id')
            ->chunk($chunkSize, function ($products): void {
                $productIds = $products->pluck('id')->all();

                $slugs = DB::table('slugs')
                    ->where('reference_type', Product::class)
                    ->whereIn('reference_id', $productIds)
                    ->pluck('key', 'reference_id');

                $cases = [];
                $ids = [];

                foreach ($slugs as $productId => $slugKey) {
                    $cases[] = 'WHEN ' . $productId . ' THEN ' . DB::getPdo()->quote($slugKey);
                    $ids[] = $productId;
                }

                if (! empty($cases)) {
                    $idsString = implode(',', $ids);
                    $casesString = implode(' ', $cases);

                    DB::update("
                        UPDATE ec_products
                        SET slug = CASE id {$casesString} END
                        WHERE id IN ({$idsString})
                    ");
                }
            });

        if (Schema::hasTable('ec_products_translations') && Schema::hasTable('slugs_translations')) {
            DB::table('slugs_translations')
                ->join('slugs', 'slugs.id', '=', 'slugs_translations.slugs_id')
                ->where('slugs.reference_type', Product::class)
                ->oldest('slugs.reference_id')
                ->select([
                    'slugs.reference_id',
                    'slugs_translations.lang_code',
                    'slugs_translations.key',
                ])
                ->chunk($chunkSize, function ($translatedSlugs): void {
                    $updates = [];

                    foreach ($translatedSlugs as $translatedSlug) {
                        $key = $translatedSlug->reference_id . '_' . $translatedSlug->lang_code;
                        $updates[$key] = [
                            'product_id' => $translatedSlug->reference_id,
                            'lang_code' => $translatedSlug->lang_code,
                            'slug' => $translatedSlug->key,
                        ];
                    }

                    if (! empty($updates)) {
                        $cases = [];
                        $conditions = [];

                        foreach ($updates as $update) {
                            $productId = $update['product_id'];
                            $langCode = DB::getPdo()->quote($update['lang_code']);
                            $slug = DB::getPdo()->quote($update['slug']);

                            $cases[] = "WHEN ec_products_id = {$productId} AND lang_code = {$langCode} THEN {$slug}";
                            $conditions[] = "(ec_products_id = {$productId} AND lang_code = {$langCode})";
                        }

                        if (! empty($cases)) {
                            $casesString = implode(' ', $cases);
                            $conditionsString = implode(' OR ', $conditions);

                            DB::update("
                                UPDATE ec_products_translations
                                SET slug = CASE {$casesString} END
                                WHERE {$conditionsString}
                            ");
                        }
                    }
                });
        }
    }

    public function down(): void
    {
        Product::query()->update(['slug' => null]);

        if (Schema::hasTable('ec_products_translations')) {
            DB::table('ec_products_translations')->update(['slug' => null]);
        }
    }
};
