<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::disableForeignKeyConstraints();

        Schema::create('airport', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('iata_code');
            $table->bigInteger('name');
            $table->bigInteger('latitude');
            $table->bigInteger('longitude');
            $table->bigInteger('region_id');
            $table->foreign('region_id')->references('id')->on('config__region');
            $table->bigInteger('type_id');
            $table->foreign('type_id')->references('id')->on('airport_type');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('airport');
    }
};