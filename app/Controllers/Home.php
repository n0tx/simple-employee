<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function hello(): string
    {
        return view('hello_world');
    }
}
