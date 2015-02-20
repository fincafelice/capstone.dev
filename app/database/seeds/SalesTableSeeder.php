<?php

use Faker\Factory as Faker;

class SalesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('sales')->delete();


		// $sale->sale_name = 
		// $sale->sale_date_time =
		// $sale->street = 
		// $sale->city =
		// $sale->state = 
		// $sale->zip =
		// $sale->country =
		// $sale->latitude =
		// $sale->longitude = 
		// $sale->description =
		// $sale->user_id =
		// $sale->save() = 
	
		$faker = Faker::create();

		for ($i=0; $i < 100; $i++) { 

			$sale = new Sale();
			$sale->sale_name = "Sale " . $faker->word;
			$sale->sale_date_time = $faker->dateTime($max = 'now');
			$sale->street = $faker->streetAddress . $faker->streetName;
			$sale->city = $faker->city;
			$sale->state = $faker->stateAbbr;
			$sale->zip = $faker->postcode;
			$sale->description = $faker->text($maxNbChars = 100);
			$sale->user_id = $faker->numberBetween($min = 1, $max = 100);
			$sale->save();
		}

	}

}