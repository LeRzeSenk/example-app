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
        Schema::create('film_genres', function (Blueprint $table) {
            $table->id()->unique();
            $table->unsignedBigInteger('film_id');
            $table->unsignedBigInteger('genre_id');

            $table->index('film_id','film_genres_film_idx');
            $table->foreign('film_id','film_genres_film_fk')->on('films')->references('id');
            $table->index('genre_id','film_genres_genre_idx');
            $table->foreign('genre_id','film_genres_genre_fl')->on('genres')->references('id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_genres');
    }
};
