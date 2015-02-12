<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

        public function run()
        {
                DB::table('users')->delete();
        
                $faker = Faker::create();

                for ($i=0; $i < 100; $i++) { 

                        $user = new User();
                        $user->username = $faker->userName; 
                        $user->email = $faker->email;
                        $user->password = $faker->word;
                        $user->street = $faker->streetAddress . $faker->streetName;
                        $user->apt = "";
                        $user->city = $faker->city;
                        $user->state = $faker->stateAbbr;
                        $user->zip = $faker->postcode;
                        $user->save();
                }

        }

}