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
        Schema::table('ec_currencies', function (Blueprint $table): void {
            $table->boolean('space_between_price_and_currency')->default(false)->after('number_format_style');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ec_currencies', function (Blueprint $table): void {
            $table->dropColumn('space_between_price_and_currency');
        });
    }
};
