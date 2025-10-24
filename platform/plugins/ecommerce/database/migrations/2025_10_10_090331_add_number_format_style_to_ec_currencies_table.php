<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('ec_currencies', function (Blueprint $table): void {
            $table->string('number_format_style', 50)->default('western')->after('decimals');
        });
    }

    public function down(): void
    {
        Schema::table('ec_currencies', function (Blueprint $table): void {
            $table->dropColumn('number_format_style');
        });
    }
};
