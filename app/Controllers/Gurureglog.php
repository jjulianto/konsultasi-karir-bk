<?php

namespace App\Controllers;

class Gurureglog extends BaseController
{
    public function register()
    {
        $data = [
            'title' => 'Register | Guru'
        ];
        return view('guru/guru-register', $data);
    }

    public function login()
    {
        $data = [
            'title' => 'Login | Guru'
        ];
        return view('guru/guru-login', $data);
    }

    //--------------------------------------------------------------------

}
