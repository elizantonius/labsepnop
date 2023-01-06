<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Absen extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Laboratorim',
            'subtitle' => 'Absensi Praktikum',
            'menu' => 'absen',
        ];
        echo view('absen', $data);
    }
}
