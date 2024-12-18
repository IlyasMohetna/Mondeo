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
        Schema::create('employe__employe', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->foreign()->references('id')->on('users');
            $table->foreignId('post_id')->foreign()->references('id')->on('employe__post');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employe__employe');
    }
};
