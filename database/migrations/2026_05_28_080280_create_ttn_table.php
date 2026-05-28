<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ttn', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('idPlant');
            $table->string('idOrder')->nullable();
            $table->string('dispatcher');
            $table->string('vProduct');
            $table->string('driver');
            $table->string('car');
            $table->string('finishAdress')->nullable();
            $table->string('finishDate')->nullable();
            $table->string('state');
            $table->boolean('isPause')->default(false);
            $table->string('idProduct');
            $table->string('idBsu');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ttn');
    }
};
