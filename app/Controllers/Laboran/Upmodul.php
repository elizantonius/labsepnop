<?php

namespace App\Controllers\Laboran;

use App\Controllers\BaseController;
use App\Models\Modul;

class Upmodul extends BaseController
{
    public function index()
    {
        $sesi = session();
        $data = [
            'title' => 'Dashboard | Laboran',
            'subtitle' => 'Upload Modul Praktikum',
        ];
        echo view('laboran/upmodul', $data);
    }

    public function postmodul()
    {

        $mmodel = new Modul();

        $periksa = $this->validate([

            'modulku' => [

                'uploaded[modulku]',
                'mime_in[pdf,application]',
                'max_size[modulku,5000]'
            ],

        ]);

        if ($periksa) {

            $file = $this->request->getFile('modulku');

            $mmodel->insert([

                'judul' => $this->request->getPost('nama_modul'),
                'smt' => $this->request->getPost('semester')

            ]);

            $file->move(WRITEPATH . 'public/Modullab');
            return redirect()->to('Laboran/Dashboard');
        } else {

            return redirect()->to('Laboran/Upmodul');
        }
    }
}
