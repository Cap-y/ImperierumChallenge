<?php

use Illuminate\Database\Seeder;
use App\Option as Option;

class OptionTableSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Faker\factory::create();

        DB::table('options')->delete();
   
        foreach (range(1,5) as $index) {
            Option::create([
                'option' => $faker->word,
            ]);
        }
    }
}
