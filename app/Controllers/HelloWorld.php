<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class HelloWorld extends BaseController
{
    public function index()
    {
        $data['title'] = 'Hello World';
        $data['body'] = '<h1>Hello World!</h1>';

        return view('hello_world', $data);
    }
}
