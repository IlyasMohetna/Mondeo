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

        Schema::create('client_fidelity', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('client_id');
            $table->foreign('client_id')->references('id')->on('client__client');
            $table->integer('point');
            $table->string('subject');
            $table->enum('transaction_type_id', [""])->nullable();
        });

        Schema::enableForeignKeyConstraints();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client_fidelity');
    }
};