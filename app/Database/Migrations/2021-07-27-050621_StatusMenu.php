<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class StatusMenu extends Migration
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
				'constraint' => 50,
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
		$this->forge->createTable('StatusMenu');
	}

	public function down()
	{
		$this->forge->dropTable('StatusMenu');
	}
}
