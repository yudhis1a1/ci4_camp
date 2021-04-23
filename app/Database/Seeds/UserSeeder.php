<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
	public function run()
	{
		$data_users = [
			[
				'name' => 'Administrator',
				'nis' => '',
				'email' => 'admin@gmail.com',
				'password' => password_hash('pass1234', PASSWORD_BCRYPT),
				'role' => 'admin'
			],
			[
				'name' => 'Yudhistira Aja',
				'nis' => '101',
				'email' => 'yudhis@gmail.com',
				'password' => password_hash('pass1234', PASSWORD_BCRYPT),
				'role' => 'siswa'
			]
		];

		foreach ($data_users as $data) {
			$this->db->table('users')->insert($data);
		}
	}
}
