<?php

use Faker\Generator as Faker;

$factory->define(App\Entity\Film\Person::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->firstName,                 // Полное Имя Актера
        'name_original' => $faker->lastName,        // Полное Имя Актера
        'image' => $faker->imageUrl(640,480, null, true),                // Аватар Актера
        'stature' => '180',              // Рост
        'birthplace' => $faker->city,           // Место рождения
        'date' => $faker->date(),                 // День рождение
    ];
});
