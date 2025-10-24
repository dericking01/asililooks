<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::table('ec_customer_deletion_requests', function (Blueprint $table): void {
            $table->string('verification_code', 6)->nullable()->after('token');
            $table->timestamp('code_expires_at')->nullable()->after('verification_code');
        });
    }

    public function down(): void
    {
        Schema::table('ec_customer_deletion_requests', function (Blueprint $table): void {
            $table->dropColumn(['verification_code', 'code_expires_at']);
        });
    }
};
