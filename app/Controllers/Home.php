<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return redirect()->to('To_Do');
    }

    public function destroySession(){
        session()->destroy();
        return redirect()->to('/');
    }
}
