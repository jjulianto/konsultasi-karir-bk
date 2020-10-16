<?php

namespace App\Controllers;

class Login extends BaseController
{
    public function guru()
	{
		$data = [
			'title' => 'Guru | Login'
		];
		return view('login/guru-login', $data);
    }

    public function siswa()
	{
		$data = [
			'title' => 'Siswa | Login'
		];
		return view('login/siswa-login', $data);
    }

    //--------------------------------------------------------------------
        
}