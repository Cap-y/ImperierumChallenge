<?php

use Illuminate\Database\Seeder;
use App\User as User;
use App\Challenge as Challenge;
use App\Question as Question;
use App\Option as Option;
use App\Result as Result;

class UserTableSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Faker\factory::create();

        DB::table('users')->delete();
       
        foreach (range(1,5) as $index) {

            User::create([
                'firstname' => $faker->firstName($gender = null|'male'|'female'),
                'lastname' => $faker->lastName,
                'alias' => $faker->email,
                'city' => $faker->city,
                'secrecy' =>  $faker->numberBetween($min = 1, $max = 3),
                /*'profilepic' => http://s3.amazonaws.com/37assets/svn/765-default-avatar.png      --vet inte hur man får att funka ännu--*/
            ]);
        }
    }
}
