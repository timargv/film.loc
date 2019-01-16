<?php

use App\Entity\Film\Film;
use App\Entity\Film\Genre;
use Illuminate\Database\Seeder;

class FilmsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\App\Entity\Film\Film::class, 10)->create();
        for ($i = 0; $i < 50; $i++) {
            DB::table('film_genres')->insert([
                'film_id' => rand(1, 50),
                'genre_id' => rand(1, 30)
            ]);
        }

//            $filmGenre = Film::getFilmGenres();
            $filmNew = new Film;

//            $countGenre = $filmGenre->count();


//
//            for ($i = 299; $i < 400; $i++) {
//                $film = $filmNew->getFilm($i);
//                $data = null;
//                if ($film != null) {
//                    $data = Film::create([
//                        "kp_id" =>      $film->id,
//                        "type" =>       $film->type,
//                        "title" =>      $film->title,
//                        "original" =>   $film->original,
//                        "poster" =>     $film->poster,
//                        "tagline" =>    $film->tagline,
//                        "runtime" =>    $film->runtime,
//                        "premiere" =>   $film->premiere,
//                        "age_limit" =>  $film->age_limit,
//                        "mpaa" =>       $film->mpaa,
//                        "company" =>    $film->company,
//
//                    ]);
//                } else {
//                    $this->command->comment('null');
//                    break;
//                }
//                $this->command->comment('Film ID '. $data->id);
//                $this->command->comment('Film KP ID '. $film->id);
//                sleep(5);
//            }



    }
}
