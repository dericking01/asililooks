<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        if (Schema::hasTable('ec_delivery_estimates')) {
            return;
        }

        Schema::create('ec_delivery_estimates', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->references('id')->on('ec_products')->onDelete('cascade');
            $table->integer('min_days')->default(1);
            $table->integer('max_days')->default(7);
            $table->json('shipping_zones')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ec_delivery_estimates');
    }
};
