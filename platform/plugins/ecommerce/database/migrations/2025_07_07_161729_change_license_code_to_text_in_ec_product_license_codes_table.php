<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        rescue(function (): void {
            Schema::table('ec_product_license_codes', function (Blueprint $table): void {
                $table->dropUnique(['license_code']);
            });
        }, report: false);

        Schema::table('ec_product_license_codes', function (Blueprint $table): void {
            $table->text('license_code')->change();
        });
    }

    public function down(): void
    {
        Schema::table('ec_product_license_codes', function (Blueprint $table): void {
            $table->string('license_code')->unique()->change();
        });
    }
};
