<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Meja extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'nomor' => [
				'type' => 'INT',
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
		$this->forge->createTable('Meja');
	}

	public function down()
	{
		$this->forge->dropTable('Meja');
	}
}
