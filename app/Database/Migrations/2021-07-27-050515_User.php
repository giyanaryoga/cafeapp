<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'password' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'email' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'name' => [
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
			],
			'id_role' => [
				'type' => 'INT',
				'unsigned' => true,
			]
		]);
		$this->forge->addKey('id', true);
		$this->forge->addForeignKey('id_role', 'Role', 'id');
		$this->forge->createTable('User');
	}

	public function down()
	{
		$this->forge->dropTable('User');
	}
}
