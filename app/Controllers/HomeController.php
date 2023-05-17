<?php

namespace App\Controllers;

class HomeController extends BaseController
{

    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        $data = [];
        return view('Auth/index', $data);
    }

}
