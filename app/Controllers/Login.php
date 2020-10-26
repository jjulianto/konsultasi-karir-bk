<?php

namespace App\Controllers;

class Login extends BaseController
{
	public function guru()
	{
		$data = [
			'title' => 'Guru | Login'
		];
		return view('guru/guru-login', $data);
	}

	public function siswa()
	{
		$data = [
			'title' => 'Siswa | Login'
		];
		return view('siswa/siswa-login', $data);
	}

	//--------------------------------------------------------------------

}
