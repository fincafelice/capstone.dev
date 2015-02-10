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
			$table->string('street', 100);
			$table->string('apt', 20)->nullable();
			$table->string('city', 50);
			$table->string('state', 2);
			$table->string('zip', 5);
			$table->text('description');
			$table->timestamps();
			$table->integer('seller_id')->unsigned()->default(1);
			$table->foreign('seller_id')->references('id')->on('users')->onDelete;
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
