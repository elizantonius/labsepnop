<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Krs;

class Login extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */

     use ResponseTrait;
    public function index()
    {
        $model = new Krs();
        helper(['form']);
        
        $rules = [
            'npm' => 'required',
            'password' => 'required| max_length[50]'
        ];

       if(!$this->validate($rules)) return $this->fail($this->validator->getErrors());
       $user = $model->where('npm', $this->request->getVar('npm'))->first();
       if(!$user) return $this->failNotFound('NPM tidak ditemukan');

       $verifikasi = password_verify($this->request->getVar('password'), $user['password']);
       if(!$verifikasi) return $this->fail('Kata sandi salah');
        
    }


}
