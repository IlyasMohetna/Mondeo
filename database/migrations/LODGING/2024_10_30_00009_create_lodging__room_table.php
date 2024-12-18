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
        Schema::create('lodging__room', function (Blueprint $table) {
            $table->id();
            $table->string('reference', 50);
            $table->string('number', 25);
            $table->foreignId('lodging_id')->foreign()->references('id')->on('lodging__lodging');
            $table->integer('max_adult');
            $table->integer('max_child');
            $table->longText('description');
            $table->decimal('surface');
            $table->foreignId('status_id')->foreign()->references('id')->on('lodging__room_status');
            $table->decimal('price');
            $table->integer('bed_number');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lodging__room');
    }
};
