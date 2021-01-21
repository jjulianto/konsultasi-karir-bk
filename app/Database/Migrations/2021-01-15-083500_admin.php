<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Admin extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_admin'          => [
				'type'           => 'INT',
				'constraint'     => 20,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'no_telp' => [
				'type'           => 'INT',
				'constraint'     => '20',
			],
			'created_at' => [
				'type'			 => 'DATETIME',
				'null'			 => true,
			],
			'updated_at' => [
				'type'			 => 'DATETIME',
				'null'			 => true,
			],
		]);
		$this->forge->addKey('id_admin', true);
		$this->forge->createTable('admin');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('admin');
	}
}
