<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('recipe', function (Blueprint $table) {
            $table->id();
            $table->string('code');
            $table->string('name');
            $table->string('mixt');
            $table->string('strength');
            $table->string('mobil');
            $table->string('frost');
            $table->string('water');
            $table->string('marka');
            $table->string('condition');
            $table->string('date');
            $table->string('classRecipe');
            $table->string('recipeParam');
            $table->string('comment');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('recipe');
    }
};
