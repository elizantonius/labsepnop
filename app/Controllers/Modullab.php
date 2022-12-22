<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Modullab extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Laboratorim',
            'subtitle' => 'Modul Praktikum',
        ];
        echo view('modul', $data);
    }
}
