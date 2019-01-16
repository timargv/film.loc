<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([
            'name' => 'timargv',
            'email' => 'tima.rgv@mail.ru',

            'email_verified_at' => now(),
            'password' => '$2y$10$d0A1VUw1MjQpMAfqZGGmOOtdH2vGVKImA1JesK1CUqFGfpMncrTfa',
            'remember_token' => str_random(10)
        ]);
    }
}
