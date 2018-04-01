<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\login;
use Illuminate\Database\Eloquent\Collection;

class loginSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
  	 	login::create([

  	 		'usuario' => '000296',
  	 		'name' => 'Jorge Gomez',
  	 		'password' => bcrypt('secret'),


  	 	]);

        login::create([

        'usuario' => '000297',
        'name' => 'Leslie Gomez',
        'password' => bcrypt('secret'),


      ]);
          login::create([

        'usuario' => '000298',
        'name' => 'Yusei Fudo',
        'password' => bcrypt('secret'),


      ]);
            login::create([

        'usuario' => '000299',
        'name' => 'Aki Izayoi',
        'password' => bcrypt('secret'),


      ]);


    }
}
