<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AlterLogin extends Migration
{
	public function up()
	{
		$this->forge->dropColumn('login', 'name');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('login', 'name');
	}
}
