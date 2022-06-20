<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Jadwal;
use CodeIgniter\HTTP\RequestTrait;


class JadwalPraktikum extends ResourceController
{
    use RequestTrait;
    use ResponseTrait;

    public function index()
    {
        $model = new Jadwal();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }


    public function addJadwal(){

        $model = new Jadwal();
        $data = $this->request->getJSON();
        $model->insert($data);
        return $this->respondCreated($data);

    }
}
