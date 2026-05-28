<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reportweightmanual', function (Blueprint $table) {
            $table->id();
            $table->string('loopNumber');
            $table->string('code');
            $table->string('dispenser');
            $table->string('weight');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reportweightmanual');
    }
};
