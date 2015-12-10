<?php

use Illuminate\Database\Seeder;
use App\User as User;
<<<<<<< HEAD
=======
use App\Challenge as Challenge;
use App\Questions as Questions;
use App\Options as Options;
>>>>>>> tilo14
class UserTableSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Faker\factory::create();

       

<<<<<<< HEAD
        foreach (range(1,20) as $index) {
=======
        foreach (range(1,5) as $index) {
>>>>>>> tilo14
            User::create([
                'firstname' => $faker->firstName($gender = null|'male'|'female'),
                'lastname' => $faker->lastName,
                'alias' => $faker->email,
                'city' => $faker->city,
<<<<<<< HEAD
                'secrecy' =>  $faker->randomDigit,
            ]);
        }


        /*DB::table('users')->insert([
 			'firstname'=>str_random(10),
 			'lastname'=>str_random(10),
 			'alias'=>str_random(10),
 			'city'=>str_random(10),
        	]);*/


=======
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

        
>>>>>>> tilo14

    }
}
