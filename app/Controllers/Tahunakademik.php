<?php

namespace App\Controllers;
use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Ta;
use CodeIgniter\HTTP\RequestTrait;

class Tahunakademik extends ResourceController
{

    use RequestTrait;
    use ResponseTrait;

    public function index()
    {
        $model = new Ta();
        $data = $model->findAll();
        return $this->respond($data,200);
    }

    public function addta(){
        $model = new Ta();
        $data = $this->request->getJSON();
        $model->insert($data);
        return $this->respondCreated($data);
    }


    public function getTA(){

        $curl = \Config\Services::curlrequest();
        $simpan = $curl->request('get', 'https://jsonplaceholder.typicode.com/posts', [
            'headers' => [
                'Accept' => 'aplications/json'
            ]
        ]);

        echo "<pre>";
		print_r($simpan);
    }
}
