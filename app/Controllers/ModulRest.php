<?php

namespace App\Controllers;

// use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Modul;
use CodeIgniter\HTTP\RequestTrait;

class Modulrest extends BaseController
{
    use RequestTrait;
    use ResponseTrait;

    public function index()
    {

        $model = new Modul();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    public function tabelmodul()
    {
        $data = [
            'title' => 'Dashboard | Laboratorim',
            'subtitle' => 'Modul Praktikum',
        ];
        echo view('modul', $data);
    }

    public function addModul()
    {

        $model = new Modul();
        $data = $this->request->getJSON();
        $model->insert($data);
        return $this->respondCreated($data);
    }
}
