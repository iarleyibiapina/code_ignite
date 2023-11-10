<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\Request;

class RegisterController extends BaseController
{
    public function index()
    {
        helper('form');

        // rota formulario
        return view("Pages/Register/form");
    }

    public function create(){
        // rota de cadastro
        helper("form");

        // pegar os dados do request
        // dd($this->request->getVar());

        // $model = model(s)
        // redireciona main
    }
}
