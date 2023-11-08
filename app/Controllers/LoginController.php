<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class LoginController extends BaseController
{
    public function index()
    {
        // rota formulario
        // return view("Pages/Login/form");
        return view("Pages/Login/form");
    }

    public function loginProccess(){
        // rota de verifica login

        // redireciona home
    }
}
