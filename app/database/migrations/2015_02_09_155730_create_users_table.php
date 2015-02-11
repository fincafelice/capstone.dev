<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('username', 50)->unique();
			$table->string('email', 50)->unique();
			$table->string('password', 60);
			$table->string('street', 100);
			$table->string('apt', 20)->nullable();
			$table->string('city', 50);
			$table->string('state', 2);
			$table->string('zip', 5);
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
