<?php

namespace App\Controller;

use Simoole\Base\Controller;

class TestController extends Controller
{
    public function index()
    {
        $this->jsonReturn([
            'status' => 200,
            'body'   => 'this is test',
        ]);
    }
}
