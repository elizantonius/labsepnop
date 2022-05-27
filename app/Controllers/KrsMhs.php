<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Krs;
use CodeIgniter\HTTP\RequestTrait;

class KrsMhs extends ResourceController
{
    use RequestTrait;
    use ResponseTrait;

    public function index()
    {
        //
    }
}
