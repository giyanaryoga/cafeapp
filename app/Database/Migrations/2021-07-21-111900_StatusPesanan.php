<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StatusPesanan extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 11,
			],
			'deskripsi' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
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
		$this->forge->createTable('StatusPesanan');
	}

	public function down()
	{
		$this->forge->dropTable('StatusPesanan');
	}
}
