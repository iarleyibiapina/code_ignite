<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function testeClass(): string
    {
        return view('Pages/index');
        // return view('');
    }
}
