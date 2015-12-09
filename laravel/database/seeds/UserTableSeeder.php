<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
   
    public function run()
    {
        /*$faker = Faker\factory::create();

        foreach ($range(1,20) as $index) {
            User::create([
                'firstname' => $faker->name,
                'lastname' => $faker->name,
                'alias' => $faker->email,
                'city' => $faker->city
            ]);
        }*/

        DB::table('users')->insert([
 			'firstname'=>str_random(10),
 			'lastname'=>str_random(10),
 			'alias'=>str_random(10),
 			'city'=>str_random(10),

        	]);



    }
}
