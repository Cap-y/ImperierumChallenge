<?php

use Illuminate\Database\Seeder;
use App\User as User;
use App\Challenge as Challenge;
use App\Questions as Questions;
use App\Options as Options;

class UserTableSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Faker\factory::create();

       
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

        foreach (range(1,5) as $index) {
            Challenge::create([
                'name' => $faker->word,
                'description' => $faker->text($maxNbChars = 50),
                'secrecy' =>   $faker->numberBetween($min = 1, $max = 3),
                'type' =>   $faker->numberBetween($min = 1, $max = 2),
                'admin' =>   $faker->numberBetween($min = 0, $max = 1),
                'active' =>   $faker->numberBetween($min = 0, $max = 1),
            ]);
        }
        foreach (range(1,5) as $index) {
            Questions::create([
                'question' => $faker->word,
                'points' =>   $faker->numberBetween($min = 1, $max = 100),
                'type' =>   $faker->numberBetween($min = 1, $max = 2),
            ]);
        }
        foreach (range(1,5) as $index) {
            Options::create([
                'option' => $faker->word,
            ]);
        }

        


    }
}
