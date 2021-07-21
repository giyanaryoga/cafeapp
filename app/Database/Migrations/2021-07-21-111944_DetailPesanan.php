<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DetailPesanan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'id_menu' => [
				'type' => 'INT',
				'unsigned' => true,
			],
			'qty' => [
				'type' => 'INT',
				'constraint' => 255,
			],
			'note' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true
			],
			'id_pesan' => [
				'type' => 'INT',
				'unsigned' => true,
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
		$this->forge->addForeignKey('id_menu', 'Menu', 'id');
		$this->forge->addForeignKey('id_pesan', 'Pesanan', 'id');
		$this->forge->createTable('DetailPesan');
	}

	public function down()
	{
		$this->forge->dropTable('DetailPesanan');
	}
}
