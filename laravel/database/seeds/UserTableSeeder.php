<?php

use Illuminate\Database\Seeder;
use App\User as User;
class UserTableSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Faker\factory::create();

       

        foreach (range(1,20) as $index) {
            User::create([
                'firstname' => $faker->firstName($gender = null|'male'|'female'),
                'lastname' => $faker->lastName,
                'alias' => $faker->email,
                'city' => $faker->city,
                'secrecy' =>  $faker->randomDigit,
            ]);
        }


        /*DB::table('users')->insert([
 			'firstname'=>str_random(10),
 			'lastname'=>str_random(10),
 			'alias'=>str_random(10),
 			'city'=>str_random(10),
        	]);*/



    }
}
