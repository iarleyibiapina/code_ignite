<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use App\Controllers\BaseController;

class PageController extends BaseController
{
    public function indexClassePage()
    {   
        return view("Pages/pages");
        //
    }

    // esse parametro é o nome da pagina a ser carregada
    public function view($page = "index"){
        if(!is_file(APPPATH . 'Views/Pages/' . $page . '.php')){
            //se nao achar a view, retorna erro de esta pagina não existe.
            throw new PageNotFoundException($page);
        }
        // se pagina existir

        // uc first, Primeira letra maiuscula
        $data['title'] = ucfirst($page); 

        // concatenando views, e o 'compact'
        return view('templates/header', $data).view('Pages/' . $page).view('templates/footer');
    }
}
