<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Pesanan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'id_customer' => [
				'type' => 'INT',
				'unsigned' => true,
			],
			'id_status' => [
				'type' => 'INT',
				'unsigned' => true,
			],
			'jumlah_harga' => [
				'type' => 'INT',
				'null' => true
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			]
		]);
		$this->forge->addKey('id', true, true);
		$this->forge->addForeignKey('id_customer', 'Customer', 'id');
		$this->forge->addForeignKey('id_status', 'StatusPesanan', 'id');
		$this->forge->createTable('Pesanan');
	}

	public function down()
	{
		$this->forge->dropTable('Pesanan');
	}
}
