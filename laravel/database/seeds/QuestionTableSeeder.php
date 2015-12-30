<?php

use Illuminate\Database\Seeder;
use App\Question as Question;

class QuestionTableSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Faker\factory::create();

        DB::table('questions')->delete();
       
        
        foreach (range(1,5) as $index) {
            Question::create([
                'question' => $faker->word,
                'points' =>   $faker->numberBetween($min = 1, $max = 100),
                'type' =>   $faker->numberBetween($min = 1, $max = 2),
            ]);
        }
    }
}
