<?php

use Illuminate\Database\Seeder;
use App\Result as Result;

class ResultTableSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Faker\factory::create();

        DB::table('results')->delete();
       
        foreach (range(1,5) as $index) {

            Result::create([
                'question1' => $faker->word,
                'question1_option' => $faker->word,
                'question1_answer' => $faker->word,
                'question1_points' => $faker->numberBetween($min = 1, $max = 100),
                'secrecy' =>  $faker->numberBetween($min = 1, $max = 3),
            ]);
        }
    }
}
