<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        if (Schema::hasTable('ec_product_categories')) {
            Schema::table('ec_product_categories', function (Blueprint $table): void {
                $table->index('status', 'idx_ec_product_categories_status');
                $table->index('parent_id', 'idx_ec_product_categories_parent_id');
                $table->index(['status', 'parent_id', 'order'], 'idx_ec_product_categories_status_parent_order');
                $table->index('is_featured', 'idx_ec_product_categories_is_featured');
                $table->index('name', 'idx_ec_product_categories_name');
                $table->index('slug', 'idx_ec_product_categories_slug');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        if (Schema::hasTable('ec_product_categories')) {
            Schema::table('ec_product_categories', function (Blueprint $table): void {
                $table->dropIndex('idx_ec_product_categories_status');
                $table->dropIndex('idx_ec_product_categories_parent_id');
                $table->dropIndex('idx_ec_product_categories_status_parent_order');
                $table->dropIndex('idx_ec_product_categories_is_featured');
                $table->dropIndex('idx_ec_product_categories_name');
                $table->dropIndex('idx_ec_product_categories_slug');
            });
        }
    }
};
