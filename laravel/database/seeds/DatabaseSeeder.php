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
<<<<<<< HEAD
        Model::unguard();

        // $this->call(UserTableSeeder::class);

        Model::reguard();
=======
        Eloquent::unguard();

        $this->call(UserTableSeeder::class);

        Eloquent::reguard();
>>>>>>> 32a113bd541bf428d50dcc2e5582edfe0d3cdff4
    }
}
