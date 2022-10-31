<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use Firebase\JWT\JWT;

class Dashboard extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index()
    {
        $kunci = getenv('TOKEN_SECRET');
        $header = $this->request->getVar('HTTP_AUTHORIZATION');
        if (!$header) {
            return $this->failUnauthorized('Token Required');
        }

        $token = explode(' ', $header)[1];

        try {
            $decode = JWT::decode($token, $kunci, ['HS256']);
            $response = [
                'id' => $decode->uid,
                'npm' => $decode->npm,
            ];

            return $this->respond($response);
        } catch (\Throwable$th) {
            return $this->fail('Invalid Token');
        }

    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */

    public function dash()
    {
        $data = [
            'title' => 'Mahasiswa | Dashboard',
            'subtitle' => 'Dashboard',
        ];
        echo view('index', $data);
    }

    public function show($id = null)
    {
        //
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    function new () {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        //
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }
}
