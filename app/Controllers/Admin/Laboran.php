<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\LaboranModel;
use CodeIgniter\API\ResponseTrait;

class Laboran extends BaseController
{
    use ResponseTrait;
    protected $laboran;
    public function __construct()
    {
        $this->laboran = new LaboranModel();
    }
    public function index()
    {
        $data = ['title' => 'Laboran', 'menu' => 'Laboran', 'subtitle' => 'ID'];
        return view('laboran', $data);
    }

    public function store()
    {
        $data = $this->laboran->findAll();
        return $this->respond($data);
    }

    public function get_by_id($id = null)
    {
        //
    }

    public function post()
    {
        //
    }

    public function put()
    {
        //
    }

    public function delete($id = null)
    {
        //
    }
}
