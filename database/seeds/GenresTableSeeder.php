<?php

use App\Entity\Film\Genre;
use Illuminate\Database\Seeder;
use App\Entity\Film\Film;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        for ($i = 0; $i < 50; $i++) {
//            DB::table('film_genres')->insert([
//                'film_id' => rand(1, 50),
//                'genre_id' => rand(1, 30)
//            ]);
//        }

        $filmGenre = Film::getFilmGenres();

        $countGenre = $filmGenre->count();

        for ($i = 0; $i < $countGenre; $i++) {
            Genre::create(['name' => $filmGenre[$i]->name, 'kp_id' => $filmGenre[$i]->id, 'slug' => str_slug($filmGenre[$i]->name)]);
        }

        //
//        Genre::create(['name' => 'Аниме', 'slug' => str_slug('Аниме')]);
//        Genre::create(['name' => 'Биография', 'slug' => str_slug('Биография')]);
//        Genre::create(['name' => 'Боевик', 'slug' => str_slug('Боевик')]);
//        Genre::create(['name' => 'Вестерн', 'slug' => str_slug('Вестерн')]);
//        Genre::create(['name' => 'Военный', 'slug' => str_slug('Военный')]);
//        Genre::create(['name' => 'Детектив', 'slug' => str_slug('Детектив')]);
//        Genre::create(['name' => 'Детский', 'slug' => str_slug('Детский')]);
//        Genre::create(['name' => 'Для Взрослых', 'slug' => str_slug('Для Взрослых')]);
//        Genre::create(['name' => 'Документальный', 'slug' => str_slug('Документальный')]);
//        Genre::create(['name' => 'Драма', 'slug' => str_slug('Драма')]);
//        Genre::create(['name' => 'Игра', 'slug' => str_slug('Игра')]);
//        Genre::create(['name' => 'История', 'slug' => str_slug('История')]);
//        Genre::create(['name' => 'Комедия', 'slug' => str_slug('Комедия')]);
//        Genre::create(['name' => 'Концерт', 'slug' => str_slug('Концерт')]);
//        Genre::create(['name' => 'Короткометражка', 'slug' => str_slug('Короткометражка')]);
//        Genre::create(['name' => 'Криминал', 'slug' => str_slug('Криминал')]);
//        Genre::create(['name' => 'Мелодрама', 'slug' => str_slug('Мелодрама')]);
//        Genre::create(['name' => 'Музыка', 'slug' => str_slug('Музыка')]);
//        Genre::create(['name' => 'Мультфильм', 'slug' => str_slug('Мультфильм')]);
//        Genre::create(['name' => 'Мюзикл', 'slug' => str_slug('Мюзикл')]);
//        Genre::create(['name' => 'Новости', 'slug' => str_slug('Новости')]);
//        Genre::create(['name' => 'Приключения', 'slug' => str_slug('Приключения')]);
//        Genre::create(['name' => 'Реальное ТВ', 'slug' => str_slug('Реальное ТВ')]);
//        Genre::create(['name' => 'Семейный', 'slug' => str_slug('Семейный')]);
//        Genre::create(['name' => 'Спорт', 'slug' => str_slug('Спорт')]);
//        Genre::create(['name' => 'Ток-Шоу', 'slug' => str_slug('Ток-Шоу')]);
//        Genre::create(['name' => 'Триллер', 'slug' => str_slug('Триллер')]);
//        Genre::create(['name' => 'Ужасы', 'slug' => str_slug('Ужасы')]);
//        Genre::create(['name' => 'Фантастика', 'slug' => str_slug('Фантастика')]);
//        Genre::create(['name' => 'Фильм-Нуар', 'slug' => str_slug('Фильм-Нуар')]);
//        Genre::create(['name' => 'Фэнтези', 'slug' => str_slug('Фэнтези')]);
    }
}
