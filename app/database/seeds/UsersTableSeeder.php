<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {


    public function run()
    {
        DB::table('users')->delete();

        $user = new User();
        $user->username = $_ENV['DEFAULT_USER_USERNAME'];
        $user->email    = $_ENV['DEFAULT_USER_EMAIL'];
        $user->password = $_ENV['DEFAULT_USER_PASSWORD'];


        $user->save();

        $faker = Faker::create();

        for ($i=0; $i < 100; $i++) { 

            $user = new User();
            $user->username = $faker->userName; 
            $user->email = $faker->email;
            $user->password = $faker->word;

            $user->save();
        }
    }
}