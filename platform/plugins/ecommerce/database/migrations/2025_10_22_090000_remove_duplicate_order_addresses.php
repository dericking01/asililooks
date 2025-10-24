<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        $duplicates = DB::table('ec_order_addresses as oa1')
            ->join('ec_order_addresses as oa2', function ($join): void {
                $join->on('oa1.order_id', '=', 'oa2.order_id')
                    ->on('oa1.type', '=', 'oa2.type')
                    ->whereRaw('oa1.id > oa2.id');
            })
            ->select('oa1.id')
            ->get()
            ->pluck('id')
            ->toArray();

        if (! empty($duplicates)) {
            foreach (array_chunk($duplicates, 100) as $chunk) {
                DB::table('ec_order_addresses')
                    ->whereIn('id', $chunk)
                    ->delete();
            }
        }

        try {
            Schema::table('ec_order_addresses', function (Blueprint $table): void {
                $table->unique(['order_id', 'type'], 'ec_order_addresses_order_id_type_unique');
            });
        } catch (Exception) {
        }
    }

    public function down(): void
    {
        try {
            Schema::table('ec_order_addresses', function (Blueprint $table): void {
                $table->dropUnique('ec_order_addresses_order_id_type_unique');
            });
        } catch (Exception) {
        }
    }
};
