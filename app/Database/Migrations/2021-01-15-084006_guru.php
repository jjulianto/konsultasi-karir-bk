<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Guru extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'nip'          => [
				'type'           => 'INT',
				'constraint'     => 20,
				'unsigned'       => true,
				'auto_increment' => true,
			],
			'nama' => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'jenis_kelamin' => [
				'type'           => 'ENUM',
				'constraint'     => array('L', 'P'),
			],
			'alamat'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'gambar'       => [
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
		$this->forge->addKey('nip', true);
		$this->forge->createTable('guru');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('guru');
	}
}
