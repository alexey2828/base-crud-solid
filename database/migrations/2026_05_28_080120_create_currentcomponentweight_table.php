<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('currentcomponentweight', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->decimal('weight', 15, 3);
            $table->string('code');
            $table->string('bsuCode');
            $table->string('silCemCode');
            $table->decimal('deltaWeight', 15, 3);
            $table->boolean('isIncreased');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('currentcomponentweight');
    }
};
