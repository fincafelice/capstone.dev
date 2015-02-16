<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class SaleTagTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		for ($i=0; $i < 600; $i++) 
		{ 
			DB::table('sale_tag')->insert(array('sale_id' => rand(1,100), 'tag_id' => rand(1,24)));
		}
	}
}