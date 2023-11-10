<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('main');
    }
    public function testeClass(): string
    {
        return view('Pages/index');
        // return view('');
    }
}
