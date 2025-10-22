<?php

use Botble\Ecommerce\Models\ProductCollection;
use Botble\Slug\Models\Slug;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Str;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Get all product collections
        $collections = ProductCollection::all();

        foreach ($collections as $collection) {
            // Check if a slug already exists for this collection
            $existingSlug = \Botble\Slug\Models\Slug::query()->where('reference_type', ProductCollection::class)
                ->where('reference_id', $collection->id)
                ->first();

            if (! $existingSlug) {
                // Generate slug from collection name if not already set
                $slugValue = $collection->slug ?: Str::slug($collection->name);

                // Ensure slug is unique
                $baseSlug = $slugValue;
                $counter = 1;

                while (\Botble\Slug\Models\Slug::query()->where('key', $slugValue)
                    ->where('prefix', 'collections')
                    ->exists()) {
                    $slugValue = $baseSlug . '-' . $counter;
                    $counter++;
                }

                // Create the slug entry
                \Botble\Slug\Models\Slug::query()->create([
                    'reference_type' => ProductCollection::class,
                    'reference_id' => $collection->id,
                    'key' => $slugValue,
                    'prefix' => 'collections',
                ]);

                // Update the collection's slug field if it was empty
                if (! $collection->slug) {
                    $collection->slug = $slugValue;
                    $collection->save();
                }

                logger()->info("Generated slug for product collection: {$collection->name} -> /collections/{$slugValue}");
            }
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Remove all slugs for product collections
        \Botble\Slug\Models\Slug::query()->where('reference_type', ProductCollection::class)->delete();
    }
};