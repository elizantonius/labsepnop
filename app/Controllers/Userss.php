<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\User;
use CodeIgniter\HTTP\RequestTrait;

use App\Controllers\BaseController;

class Userss extends ResourceController
{
    use RequestTrait;
    use ResponseTrait;

    public function index()
    {
        $model = new User();
        $data = $model->findAll();
        return $this->respond($data,200);
    }

    public function addusers(){

        $model = new User();
        $data = $this->request->getJSON();
        $model->insert($data);
        return $this->respondCreated($data);
    }
}
