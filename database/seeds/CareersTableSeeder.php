<?php

use App\Entity\Film\Career;
use Illuminate\Database\Seeder;

class CareersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 50; $i++) {
            DB::table('person_careers')->insert([
                'career_id' => rand(1, 8),
                'person_id' => rand(1, 50)
            ]);
        }

        //
        Career::create(['name' => 'Актер']);
        Career::create(['name' => 'Актриса']);
        Career::create(['name' => 'Режиссер']);
        Career::create(['name' => 'Сценарист']);
        Career::create(['name' => 'Продюсер']);
        Career::create(['name' => 'Оператор']);
        Career::create(['name' => 'Композитор']);
        Career::create(['name' => 'Художник']);
        Career::create(['name' => 'Монтажер']);
    }
}
