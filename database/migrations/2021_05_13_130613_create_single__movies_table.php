<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSingleMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //table single_movies
        Schema::create('single_movies', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->unsignedInteger('year');
        });
        //table series_movies
        Schema::create('series_movies', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->unsignedInteger('year');
        });
        //table theater_movies
        Schema::create('theater_movies', function (Blueprint $table) {
            $table->id();
            $table->string('name',255);
            $table->unsignedInteger('year');
        });
        //table nations
        Schema::create('nations', function (Blueprint $table) {
            $table->id();
            $table->string('name',30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('single__movies');
    }
}
