<?php

use Illuminate\Database\Seeder;
use App\Challenge as Challenge;

class ChallengeTableSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Faker\factory::create();

        DB::table('challenges')->delete();

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
    }
}
