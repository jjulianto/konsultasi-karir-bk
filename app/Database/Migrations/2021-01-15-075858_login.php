<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Login extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id_akun'          => [
				'type'           => 'INT',
				'constraint'     => 11,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'username'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'password' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'role' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
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
		$this->forge->addKey('id_akun', true);
		$this->forge->createTable('login');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('login');
	}
}
