<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function dashboard()
    {
        $data = [
            'title' => 'Dashboard'
        ];
        return view('dashboard/dashboard', $data);
    }

    public function konseling()
    {
        $data = [
            'title' => 'Konsultasi Karir'
        ];
        return view('dashboard/konseling', $data);
    }

    public function notifikasi()
    {
        $data = [
            'title' => 'Notifikasi'
        ];
        return view('dashboard/notifikasi', $data);
    }
    //--------------------------------------------------------------------

}
