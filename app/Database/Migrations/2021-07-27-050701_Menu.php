<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Menu extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'slug' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'namaMenu' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'harga' => [
				'type' => 'INT',
				'null' => true
			],
			'gambar' => [
				'type' => 'VARCHAR',
				'constraint' => 255,
				'null' => true
			],
			'id_kategori' => [
				'type' => 'INT',
				'unsigned' => true,
			],
			'id_status' => [
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
		$this->forge->addForeignKey('id_kategori', 'KategoriMenu', 'id');
		$this->forge->addForeignKey('id_status', 'StatusMenu', 'id');
		$this->forge->createTable('Menu');
	}

	public function down()
	{
		$this->forge->dropTable('Menu');
	}
}
