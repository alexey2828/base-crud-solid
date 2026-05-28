<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reportcurrentloop', function (Blueprint $table) {
            $table->id();
            $table->string('vLoop');
            $table->string('loopNumber');
            $table->string('code');
            $table->string('dispencer');
            $table->string('doisingError');
            $table->string('doisingErrorPersent');
            $table->string('doisingKorr');
            $table->string('humidityKorr');
            $table->string('weightFactLoop');
            $table->string('weightFactM3');
            $table->string('weightRecipeLoop');
            $table->string('weightRecipeM3');
            $table->string('idProduct');
            $table->string('indProduct');
            $table->string('powerLoop');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reportcurrentloop');
    }
};
