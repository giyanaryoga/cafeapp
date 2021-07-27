<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class StatusPesanan extends Seeder
{
	public function run()
	{
		$data = [
			[
				'name' => 'unpaid',
				'deskripsi' => 'belum terbayar'
			],
			[
				'name' => 'paid',
				'deskripsi' => 'sudah terbayar'
			]
		];

		$this->db->table('statuspesanan')->insert($data);
	}
}
