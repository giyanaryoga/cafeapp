<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusMenu extends Seeder
{
	public function run()
	{
		$data = [
			[
				'id' => 1,
				'name' => 'aktif',
				'deskripsi' => 'menu tersedia'
			],
			[
				'id' => 2,
				'name' => 'nonaktif',
				'deskripsi' => 'menu tidak tersedia'
			]
		];

		$this->db->table('statusmenu')->insert($data);
	}
}
