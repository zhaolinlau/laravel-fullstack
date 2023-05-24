<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 */
	public function run(): void
	{
		$users = [
			[
				'ic' => '485967363937',
				'name' => 'admin',
				'gender' => 'male',
				'staff_id' => 'stf321',
				'email' => 'lauhacker98@hotmail.com',
				'contact' => '0987654321',
				'role' => 2,
				'password' => bcrypt('12345678'),
			],
		];

		foreach ($users as $key => $user) {
			User::create($user);
		}
	}
}
