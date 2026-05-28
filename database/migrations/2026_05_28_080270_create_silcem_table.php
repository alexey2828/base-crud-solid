<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('silcem', function (Blueprint $table) {
            $table->id();
            $table->string('codeBSU');
            $table->string('code');
            $table->string('batcher');
            $table->string('capacity');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('silcem');
    }
};
