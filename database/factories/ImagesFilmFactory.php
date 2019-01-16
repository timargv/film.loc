<?php

use Faker\Generator as Faker;

$factory->define(App\Entity\Film\Media::class, function (Faker $faker) {
    return [
        //
        'image' => 'https://st.kp.yandex.net/im/kadr/3/2/5/kinopoisk.ru-Venom-3257813.jpg',
        'film_id' => $faker->numberBetween(1, 50),
    ];
});
