<?php

namespace App\Controllers\Laboran;

use App\Controllers\BaseController;

class Opabsen extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Laboran',
            'subtitle' => 'Buka Absen',
        ];
        echo view('laboran/opabsen', $data);
    }
}
