<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('role')->nullable()->after('email');
            $table->string('login')->nullable()->unique()->after('role');
            $table->string('phone')->nullable()->after('login');
            $table->string('verification_code')->nullable()->after('phone');
            $table->timestamp('verification_expires')->nullable()->after('verification_code');
        });
    }

    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn(['role', 'login', 'phone', 'verification_code', 'verification_expires']);
        });
    }
};
