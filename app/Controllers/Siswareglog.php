<?php

namespace App\Controllers;

class Siswareglog extends BaseController
{
    public function register()
    {
        $data = [
            'title' => 'Register | Siswa'
        ];
        return view('siswa/siswa-register', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login | Siswa'
        ];
        return view('siswa/siswa-login', $data);
    }

    //--------------------------------------------------------------------

}
