<?php

class UsersTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

        $user = new User();
        $user->username = $_ENV['DEFAULT_USER_USERNAME'];
        $user->email    = $_ENV['DEFAULT_USER_EMAIL'];
        $user->password = $_ENV['DEFAULT_USER_PASSWORD'];
        $user->street   = $_ENV['DEFAULT_USER_STREET'];
        $user->apt      = $_ENV['DEFAULT_USER_APT'];
        $user->city     = $_ENV['DEFAULT_USER_CITY'];
        $user->state    = $_ENV['DEFAULT_USER_STATE'];
        $user->zip      = $_ENV['DEFAULT_USER_ZIP'];
   
        $user->save();
	}
}