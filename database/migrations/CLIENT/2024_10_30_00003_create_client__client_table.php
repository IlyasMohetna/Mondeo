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
        Schema::create('client__client', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->foreign()->references('id')->on('users');
            $table->string('firstname', 50);
            $table->string('lastname', 50);
            $table->string('email', 120);
            $table->string('phone', 15);
            $table->string('address_1');
            $table->string('address_2');
            $table->foreignId('city_id')->foreign()->references('id')->on('config__city');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('client__client');
    }
};