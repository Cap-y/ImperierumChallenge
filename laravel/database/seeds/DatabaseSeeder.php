<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Model::unguard();

         //$this->call(UserTableSeeder::class);

        Model::reguard();

        Eloquent::unguard();

        $this->call(UserTableSeeder::class);
        $this->call(ChallengeTableSeeder::class);
        $this->call(QuestionTableSeeder::class);
        $this->call(OptionTableSeeder::class);
        $this->call(ResultTableSeeder::class);
        //$this->call(MiddleTableSeeder::class);

        Eloquent::reguard();

    }
}
