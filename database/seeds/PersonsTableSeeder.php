<?php

use Illuminate\Database\Seeder;

class PersonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(\App\Entity\Film\Person::class, 50)->create();

        for ($i = 0; $i < rand(5, 8); ++$i) {
            DB::table('film_casts')->insert([
                ['person_id' => random_int(1, 50), 'film_id' => 1],
            ]);

            DB::table('film_directors')->insert([
                ['person_id' => random_int(1, 50), 'film_id' => 1],
            ]);

            DB::table('film_scriptwriters')->insert([
                ['person_id' => random_int(1, 50), 'film_id' => 1],
            ]);

            DB::table('film_producers')->insert([
                ['person_id' => random_int(1, 50), 'film_id' => 1],
            ]);

            DB::table('film_operators')->insert([
                ['person_id' => random_int(1, 50), 'film_id' => 1],
            ]);

            DB::table('film_composers')->insert([
                ['person_id' => random_int(1, 50), 'film_id' => 1],
            ]);

            DB::table('film_painters')->insert([
                ['person_id' => random_int(1, 50), 'film_id' => 1],
            ]);

            DB::table('film_editors')->insert([
                ['person_id' => random_int(1, 50), 'film_id' => 1],
            ]);

        }

    }
}
