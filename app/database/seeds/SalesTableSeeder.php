<?php

use Faker\Factory as Faker;

class SalesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('sales')->delete();

		$sale = new Sale();
		$sale->sale_name = "Kevin's Garage Sale!";
		$sale->sale_date_time = "2015-12-30T14:00";
		$sale->street_num = '112';
		$sale->street = "E Pecan Street";
		$sale->city = 'San Antonio';
		$sale->state = 'TX';
		$sale->zip = '78205';
		$sale->country = 'United States';
		$sale->latitude = '29.4284595';
		$sale->longitude = '-98.492433';
		$sale->description = 'Come to my garage sale! I will have a variety of unique items including old fashioned antiques!';
		$sale->user_id = '1';
		$sale->save();

		$sale = new Sale();
		$sale->sale_name = "Nicole's Garage Sale!";
		$sale->sale_date_time = "2015-10-16T11:00";
		$sale->street_num = '659';
		$sale->street = "W Elmira Street";
		$sale->city = 'San Antonio';
		$sale->state = 'TX';
		$sale->zip = '78205';
		$sale->country = 'United States';
		$sale->latitude = '29.433164';
		$sale->longitude = '-98.50115500000004';
		$sale->description = 'Come to my garage sale! I will have a variety of unique items including old fashioned antiques!';
		$sale->user_id = '1';
		$sale->save();

		$sale = new Sale();
		$sale->sale_name = "Felice's Garage Sale!";
		$sale->sale_date_time = "2015-8-12T10:00";
		$sale->street_num = '456';
		$sale->street = "E French Pl";
		$sale->city = 'San Antonio';
		$sale->state = 'TX';
		$sale->zip = '78205';
		$sale->country = 'United States';
		$sale->latitude = '29.449877';
		$sale->longitude = '-98.48513700000001';
		$sale->description = 'Come to my garage sale! I will have a variety of unique items including old fashioned antiques!';
		$sale->user_id = '1';
		$sale->save();

		$sale = new Sale();
		$sale->sale_name = "Randy's Garage Sale!";
		$sale->sale_date_time = "2015-8-12T10:00";
		$sale->street_num = '705';
		$sale->street = "E Houston St";
		$sale->city = 'San Antonio';
		$sale->state = 'TX';
		$sale->zip = '78205';
		$sale->country = 'United States';
		$sale->latitude = '29.4265515';
		$sale->longitude = '-98.48570710000001';
		$sale->description = 'Come to my garage sale! I will have a variety of unique items including old fashioned antiques!';
		$sale->user_id = '1';
		$sale->save();
	
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