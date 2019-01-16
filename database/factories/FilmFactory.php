<?php

use App\Entity\Film\Film;
use Faker\Generator as Faker;




$factory->define(App\Entity\Film\Film::class, function (Faker $faker) {

    $images[] = null;
    $j = rand(3, 8);
    for ($i = 1; $i < $j; $i++) {
        $images[] = $faker->imageUrl(640, 480);
    }
    return [
        //
        'kp_id' => $faker->randomNumber(5),
        'type' => $faker->randomElement(['film','serial']),
        'title' => $faker->realText(20),
        'tagline' => $faker->realText(10),
        'original' => $faker->realText(50),
        'slogan' => $faker->realText(50),
        'company' => $faker->randomNumber(5),
        'budget' => $faker->randomNumber(5),
        'premiere' => $faker->date(),
        'age_limit' => $faker->numberBetween(0, 21),
        'mpaa' => $faker->numberBetween(0, 21),
        'rating' => $faker->numberBetween(1, 10),
        'kp_rating' => Film::getKpReatingFile(470178)['kp_rating'],
        'imdb_rating' => Film::getKpReatingFile(470178)['imdb_rating'],
        'runtime' => $faker->numberBetween(30, 260),
        'images' => $images,
        'poster' => $faker->randomElement(['http://image.tmdb.org/t/p/w370_and_h556_bestv2//nBNZadXqJSdt05SHLqgT0HuC5Gm.jpg', 'https://image.tmdb.org/t/p/w370_and_h556_bestv2/8dTWj3c74RDhXfSUZpuyVNJrgS.jpg']),
        'sh_description' => $faker->realText(150),
        'description' => $faker->realText(500),
        'trailer_youtube' => 'MnQHT7FdDww',
        'film_video' => 'MnQHT7FdDww',
    ];
});
