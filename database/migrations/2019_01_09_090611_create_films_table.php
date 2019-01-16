<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * актеры            - person_id
     * жанры             - genre_id
     * страна            - country_id
     * год               - year_id
     * сценарий          - writer
     * продюсер          - director
     * оператор          - operator
     * композитор        - composer
     * художник          - artist
     * монтаж            - mounting
     * бюджет            - budget
     * сборы в США       - fees in the USA
     * сборы в мире      - fees in the world
     * сборы в России    - fees in Russia
     * зрители           - spectators
     * премьера (мир).   - premiere (world).
     * премьера (РФ)     - premiere (RF)
     * возраст           - age
     * рейтинг MPAA      - rating MPAA
     * рейтинг PG-13     - rating PG-13
     * время             - time
     * тематика          - subjects
     * связанные фильмы  - films_id
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kp_id');
            $table->string('type')->nullable();
            $table->string('title');
            $table->string('original')->nullable();
            $table->string('slogan')->nullable();
            $table->string('tagline')->nullable();
            $table->string('budget')->nullable();
            $table->date('premiere')->nullable();
            $table->integer('age_limit')->nullable();
            $table->string('mpaa')->nullable();
            $table->integer('company')->nullable();
            $table->float('rating')->nullable();
            $table->float('kp_rating')->nullable();
            $table->float('imdb_rating')->nullable();
            $table->string('runtime')->nullable();
            $table->string('poster')->nullable();
            $table->json('images')->nullable();
            $table->string('sh_description')->nullable();
            $table->text('description')->nullable();
            $table->string('trailer_youtube')->nullable();
            $table->string('film_video')->nullable();
            $table->string('slug')->nullable();
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
        Schema::dropIfExists('films');
    }
}
