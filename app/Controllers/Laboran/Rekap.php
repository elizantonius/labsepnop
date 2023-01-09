<?php

namespace App\Controllers\Laboran;

use App\Controllers\BaseController;

class Rekap extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Rekap | Laboran',
            'subtitle' => 'Halaman Rekap',
            'menu' => 'rekap',
        ];

        echo view('laboran/rekap', $data);
    }
}
