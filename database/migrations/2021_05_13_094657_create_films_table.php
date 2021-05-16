<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->id();

            $table->string('name',100);
            $table->string('name2',100);
            $table->string('status',100);
            $table->string('director',100);
            $table->string('actor',100);

            $table->unsignedInteger('category_id');
            $table->unsignedInteger('type_movie');
            $table->unsignedInteger('nation_id');
            $table->unsignedInteger('year');

            $table->string('image',100);
            $table->string('description',100);
            $table->unsignedInteger('duration');
            $table->unsignedInteger('num_view');
            $table->string('author',100);

            $table->foreign('category_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');

            $table->foreign('type_movie')
            ->references('id')
            ->on('type_movies')
            ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
