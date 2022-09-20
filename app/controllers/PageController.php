<?php

namespace App\Controllers;

use App\Core\App;

class PageController
{
    public function login()
    {
        return view("login");
    }

    public function index()
    {
        $index = 'yh';
        return view("index", ['index' => $index]);
    }

    public function register()
    {
        $index = 'yh';
        return view("register", ['index' => $index]);
    }
}
