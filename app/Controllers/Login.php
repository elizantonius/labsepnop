<?php

namespace App\Controllers;

use App\Models\Krs;
use CodeIgniter\API\ResponseTrait;
use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;

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
        $data = [
            'title' => 'Login | Laboratorium STIMIK SEPULUH NOPEMBER',
            'Login',
        ];

        echo view('login', $data);

    }

    public function login()
    {

        $model = new Krs();
        helper(['form']);

        $rules = [
            'npm' => 'required',
            'password' => 'required| max_length[50]',
        ];

        if (!$this->validate($rules)) {
            return $this->fail($this->validator->getErrors());
        }

        $user = $model->where('npm', $this->request->getVar('npm'))->first();
        if (!$user) {
            return $this->failNotFound('NPM tidak ditemukan');
        }

        $verifikasi = password_verify($this->request->getVar('password'), $user['password']);
        if (!$verifikasi) {
            return $this->fail('Kata sandi salah');
        }

        $kunci = getenv('TOKEN_SECRET');
        $payload = array(
            'iat' => 1356999524,
            'nbf' => 1357000000,
            'uid' => $user['id'],
            'npm' => $user['npm'],
        );

        $token = JWT::encode($payload, $kunci, 'HS256');

        return $this->respond($token);

    }

}
