<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mainstate', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('code')->unique();
            $table->string('options');
            $table->string('entityName');
            $table->boolean('isPause');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mainstate');
    }
};
