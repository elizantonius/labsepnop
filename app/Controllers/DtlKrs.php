<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Detailkrs;
use CodeIgniter\HTTP\RequestTrait;

class DtlKrs extends ResourceController
{
    use RequestTrait;
    use ResponseTrait;

    public function index()
    {
        $model = new Detailkrs();
        $data = $model->findAll();
        return $this->respond($data,200);
    }

    public function Matkulprak(){

        $model = new Detailkrs();
        $data = $this->request->getJSON();
        $model->insert($data);
        return $this->respondCreated($data);
    }
}
