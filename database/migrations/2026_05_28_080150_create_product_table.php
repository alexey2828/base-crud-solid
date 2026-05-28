<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('dateStart');
            $table->string('timeEnd');
            $table->string('vProduct');
            $table->string('loopNumber');
            $table->string('vLoop');
            $table->string('driver');
            $table->string('car');
            $table->string('classRecipe');
            $table->string('nameRecipe');
            $table->string('recipe');
            $table->string('idTtn');
            $table->string('timeStart');
            $table->string('num_loop');
            $table->string('idPlant');
            $table->string('indProduct');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
