<?php

use Faker\Factory as Faker;

class SalesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('sales')->delete();
	
		$faker = Faker::create();

		for ($i=0; $i < 100; $i++) { 

			$sale = new Sale();
			$sale->sale_name = "Sale " . $faker->word;
			$sale->street = $faker->streetAddress . $faker->streetName;
			$sale->apt = "";
			$sale->city = $faker->city;
			$sale->state = $faker->stateAbbr;
			$sale->zip = $faker->postcode;
			$sale->sale_date_time = $faker->dateTime($max = 'now');
			$sale->description = $faker->text($maxNbChars = 100);
			$sale->seller_id = $faker->numberBetween($min = 1, $max = 100);
			$sale->save();
		}

	}

}