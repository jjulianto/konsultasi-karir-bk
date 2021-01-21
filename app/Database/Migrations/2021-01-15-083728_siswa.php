<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Siswa extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'nis'          => [
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
			'kelas'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '20',
			],
			'jurusan'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'gambar'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tanggal_lahir'       => [
				'type'           => 'DATETIME',
				'null'			 => true,
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
		$this->forge->addKey('nis', true);
		$this->forge->createTable('siswa');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('siswa');
	}
}
