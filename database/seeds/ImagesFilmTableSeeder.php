<?php

use Illuminate\Database\Seeder;

class ImagesFilmTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Entity\Film\Media::class, 50)->create();
    }
}
