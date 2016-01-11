<?php

use Illuminate\Database\Seeder;
use App\User as User;
use App\Challenge as Challenge;
use App\Question as Question;
use App\Option as Option;

class MiddleTableSeeder extends Seeder
{

    //Inte listat ut hur mellantabeller seedas. Jäkla huvudvärk.
   
    public function run()
    {
        $faker = Faker\factory::create();

        $users = User::lists('id')->All();
        $challenges = Challenge::lists('id')->All();
        $questions = Question::lists('id')->All();
        $options = Option::lists('id')->All();

        foreach (range(1,5) as $index) {

            User::create([
                'user_id' => $faker->randomElement($users),
                'challenge_id' => $faker->randomElement($challenges),
                'active' => $faker->numberBetween($min = 0, $max = 1)
                
            ]);
        }
    }
}
