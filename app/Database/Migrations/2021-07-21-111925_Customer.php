<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Customer extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'no_hp' => [
				'type' => 'VARCHAR',
				'constraint' => 15,
				'null' => true
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'updated_at' => [
				'type' => 'DATETIME',
				'null' => true
			],
			'id_kursi' => [
				'type' => 'INT',
				'unsigned' => true,
			]
		]);
		$this->forge->addKey('id', true, true);
		$this->forge->addForeignKey('id_kursi', 'Kursi', 'id');
		$this->forge->createTable('Customer');
	}

	public function down()
	{
		$this->forge->dropTable('Customer');
	}
}
