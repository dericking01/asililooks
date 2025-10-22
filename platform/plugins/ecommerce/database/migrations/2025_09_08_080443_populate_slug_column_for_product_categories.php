<?php

use Botble\Ecommerce\Models\ProductCategory;
use Botble\Slug\Models\Slug;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        $slugs = Slug::query()
            ->where('reference_type', ProductCategory::class)
            ->pluck('key', 'reference_id')
            ->toArray();

        if (! empty($slugs)) {
            ProductCategory::query()
                ->whereIn('id', array_keys($slugs))
                ->chunkById(1000, function ($categories) use ($slugs): void {
                    foreach ($categories as $category) {
                        if (isset($slugs[$category->id])) {
                            $category->slug = $slugs[$category->id];
                            $category->save();
                        }
                    }
                });
        }

        if (Schema::hasTable('ec_product_categories_translations')) {
            if (Schema::hasTable('slugs_translations')) {
                $translatedSlugs = DB::table('slugs_translations')
                    ->join('slugs', 'slugs.id', '=', 'slugs_translations.slugs_id')
                    ->where('slugs.reference_type', ProductCategory::class)
                    ->select([
                        'slugs.reference_id',
                        'slugs_translations.lang_code',
                        'slugs_translations.key',
                    ])
                    ->get()
                    ->groupBy('lang_code');

                foreach ($translatedSlugs as $langCode => $slugsByLang) {
                    $updates = [];
                    foreach ($slugsByLang as $slug) {
                        $updates[$slug->reference_id] = $slug->key;
                    }

                    if (! empty($updates)) {
                        $cases = [];
                        $ids = [];

                        foreach ($updates as $id => $slugValue) {
                            $cases[] = "WHEN ec_product_categories_id = {$id} THEN " . DB::getPdo()->quote($slugValue);
                            $ids[] = $id;
                        }

                        $idsString = implode(',', $ids);
                        $casesString = implode(' ', $cases);

                        DB::update("
                            UPDATE ec_product_categories_translations
                            SET slug = CASE {$casesString} END
                            WHERE ec_product_categories_id IN ({$idsString})
                            AND lang_code = ?
                        ", [$langCode]);
                    }
                }
            }
        }
    }

    public function down(): void
    {
        ProductCategory::query()->update(['slug' => null]);

        if (Schema::hasTable('ec_product_categories_translations')) {
            DB::table('ec_product_categories_translations')->update(['slug' => null]);
        }
    }
};
