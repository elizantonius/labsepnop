<?php

namespace App\Controllers\Laboran;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Dashboard | Laboran',
            'subtitle' => 'Hallo Laboran SEPNOP',
            'menu' => 'dashboard',
        ];
        echo view('laboran/index', $data);
    }
}
