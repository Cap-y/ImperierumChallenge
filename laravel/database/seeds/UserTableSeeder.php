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
                'firstname' => $faker->name,
                'lastname' => $faker->name,
                'alias' => $faker->email,
                'city' => $faker->city
            ]);
        }

<<<<<<< HEAD
        /*DB::table('users')->insert([
=======
        DB::table('users')->insert([
>>>>>>> 7574495ed664fdfa9b35d8d2e25518748c0829d5
 			'firstname'=>str_random(10),
 			'lastname'=>str_random(10),
 			'alias'=>str_random(10),
 			'city'=>str_random(10),
        	]);*/



    }
}
