<?php

use Illuminate\Database\Seeder;

use App\users;

class usersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        users::create([

            'name' => 'Jorge Gomez',
            'email' => 'jorge.gomez92@hotmail.com',
            'password' => bcrypt('secret'),
        ]);
    }
}
