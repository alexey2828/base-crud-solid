<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('consumptioncomponentweight', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('code');
            $table->decimal('weight', 15, 3);
            $table->string('silCemCode');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('consumptioncomponentweight');
    }
};
