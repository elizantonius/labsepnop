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
        $curl = \Config\Services::curlrequest();
        $simpan = $curl->request('get', 'https://jsonplaceholder.typicode.com/posts', [
            'headers' => [
                'Accept' => 'aplications/json'
            ]
        ]);

        echo "<pre>";
		print_r($simpan);
    }

    public function addusers(){

        $model = new User();
        $data = $this->request->getJSON();
        $model->insert($data);
        return $this->respondCreated($data);
    }
}
