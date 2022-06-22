<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Krs;
use CodeIgniter\HTTP\RequestTrait;

class KrsMhs extends ResourceController
{
    //protected $rest;

    use RequestTrait;
    use ResponseTrait;

    public function index()
    {
        $model = new Krs();
        $data = $model->findAll();
        return $this->respond($data, 200);
        
    }

    public function addmahasiswa(){

        $model = new Krs();
        $data = $this->request->getJSON();
        $model->insert($data);
        return $this->respondCreated($data);
    }
}
