<?php

namespace App\Controllers\Laboran;

use App\Controllers\BaseController;

class Upmodul extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Laboran',
            'subtitle' => 'Upload Modul Praktikum',
        ];
        echo view('laboran/upmodul', $data);
    }
}
