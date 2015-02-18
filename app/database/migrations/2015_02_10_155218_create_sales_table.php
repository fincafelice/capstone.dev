<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sales', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sale_name', 255);
			$table->dateTime('sale_date_time');
			$table->string('street_num', 255);
			$table->string('street', 255);
			$table->string('city', 255);
			$table->string('state', 2);
			$table->string('zip', 5);
			$table->string('country', 255);
			$table->decimal('latitude', 10, 7);
			$table->decimal('longitude', 10, 7);
			$table->string('address', 500);
			$table->text('description');

			$table->integer('user_id')->unsigned()->default(1);
			$table->foreign('user_id')->references('id')->on('users')->onDelete;
			
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sales');
	}

}
