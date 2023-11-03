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
        return "teste message";
        // return view('');
    }
}
