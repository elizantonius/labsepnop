<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\LaboranM;
use CodeIgniter\HTTP\RequestTrait;

class Laboran extends ResourceController
{
    use RequestTrait;
    use ResponseTrait;

    public function index()
    {
        $model = new LaboranM();
        $data = $model->findAll();
        return $this->respond($data, 200);
    }

    public function addlaboran()
    {

        $model = new LaboranM();
        $data = $this->request->getJSON();
        $model->insert($data);
        return $this->respondCreated($data);
    }
}
