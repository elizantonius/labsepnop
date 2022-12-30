<?php

namespace App\Controllers\Laboran;

use App\Controllers\BaseController;
use App\Models\Modul;
use CodeIgniter\HTTP\Files\UploadedFile;
$validation = \Config\Services::validation();

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

        helper(['form']);

        $mmodel = new Modul();

        if(!$this->validate([

                'modulku' =>[
                    'uploaded[modulku]',
                    'mime_in[modulku,application/pdf]',
                    'max_size[modulku,5000]'
                ]
        ]

        )){

            session()->setFlashdata('Kesalahan', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }

        $datamodul = $this->request->getFile('modulku');
        $filenama = $datamodul->getRandomName();
        $mmodel->insert([

            'nama_modul' => $this->request->getPost('judul'),
            'semester' => $this->request->getPost('smt'),
            'modulku' => $filenama

        ]);
        $datamodul->move('public/Modullab', $filenama);
        session()->setFlashdata('Sukses','Modul berhasil di Upload');
        return redirect()->to(base_url('Laboran/Dashboard'));
    }
}
