<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('ttnstate', function (Blueprint $table) {
            $table->id();
            $table->string('date');
            $table->string('state');
            $table->string('idTtn');
            $table->json('json')->nullable();
            $table->boolean('isPause')->default(false);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('ttnstate');
    }
};
