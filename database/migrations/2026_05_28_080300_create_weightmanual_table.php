<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('weightmanual', function (Blueprint $table) {
            $table->id();
            $table->string('indProduct');
            $table->string('numLoop');
            $table->string('code');
            $table->string('weight');
            $table->string('dispenser');
            $table->string('idProduct');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('weightmanual');
    }
};
