<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmPersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('film_casts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('film_id');
            $table->integer('person_id');
            $table->timestamps();
        });

        Schema::create('film_directors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('film_id');
            $table->integer('person_id');
            $table->timestamps();
        });

        Schema::create('film_scriptwriters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('film_id');
            $table->integer('person_id');
            $table->timestamps();
        });

        Schema::create('film_producers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('film_id');
            $table->integer('person_id');
            $table->timestamps();
        });

        Schema::create('film_operators', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('film_id');
            $table->integer('person_id');
            $table->timestamps();
        });

        Schema::create('film_composers', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('film_id');
            $table->integer('person_id');
            $table->timestamps();
        });

        Schema::create('film_painters', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('film_id');
            $table->integer('person_id');
            $table->timestamps();
        });

        Schema::create('film_editors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('film_id');
            $table->integer('person_id');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('film_casts');
        Schema::dropIfExists('film_directors');
        Schema::dropIfExists('film_scriptwriters');
        Schema::dropIfExists('film_producers');
        Schema::dropIfExists('film_operators');
        Schema::dropIfExists('film_composers');
        Schema::dropIfExists('film_painters');
        Schema::dropIfExists('film_editors');
    }
}
