<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class UserTableSeeder extends Seeder {

	/**
	 * Seed the confer tables of the application.
	 *
	 * @return void
	 */
	public function run()
	{
		$tester = 1;
		while ($tester < 20) {
			User::create([
				'name' => 'Confer Tester ' . $tester,
				'email' => 'confer' . $tester . '@tester.com',
				'password' => 'notset',
				'avatar' => 'avatar-default.png'
			]);
			$tester++;
		}
	}

}