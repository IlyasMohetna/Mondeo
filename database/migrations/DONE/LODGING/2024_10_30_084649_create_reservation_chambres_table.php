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

        Schema::create('reservation_chambres', function (Blueprint $table) {
            $table->id();
            $table->foreign('id_reservation')->references('id')->on('reservation_hebergement');
            $table->bigInteger('id_chambre');
            $table->foreign('id_chambre')->references('id')->on('chambre');
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_chambres');
    }
};