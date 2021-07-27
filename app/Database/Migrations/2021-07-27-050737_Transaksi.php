<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Transaksi extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'tanggal' => [
				'type' => 'DATETIME'
			],
			'id_pesan' => [
				'type' => 'INT',
				'unsigned' => true,
			],
			'ppn' => [
				'type' => 'INT',
				'null' => true
			],
			'total_bayar' => [
				'type' => 'INT',
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
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('id_pesan', 'Pesanan', 'id');
		$this->forge->createTable('Transaksi');
	}

	public function down()
	{
		$this->forge->dropTable('Transaksi');
	}
}
