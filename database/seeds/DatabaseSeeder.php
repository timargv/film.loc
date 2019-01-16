<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(FilmsTableSeeder::class);
        $this->call(ImagesFilmTableSeeder::class);
        $this->call(PersonsTableSeeder::class);
        $this->call(CareersTableSeeder::class);
        $this->call(YearsTableSeeder::class);
        $this->call(GenresTableSeeder::class);
    }
}
