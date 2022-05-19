<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Mahasiswa;
use CodeIgniter\HTTP\RequestTrait;

class Datamahasiswa extends ResourceController
{

    use RequestTrait;
    use ResponseTrait;

    public function index()
    {
        $model = new Mahasiswa();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }
}
