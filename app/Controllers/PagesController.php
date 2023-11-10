<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class PagesController extends BaseController
{
    public function index()
    {
        //
        $teste['titulo'] = "Sobressalente";

        $data['arrayDeDados'] = [
            'um' => 'texto',
            'dois' => 10392,
        ];
        return view("index", $data + $teste);
    }

    public function view($page = 'home'){
        // dd($page);
        
        // if(!is_file(APPPATH . 'Views/pages/' . $page . 'php')){
        //     // esta pagina não existe
        //     // 'lance' uma nova excessao de padina nao encontrada
        //     throw new PageNotFoundException($page);    
        // }
        
        $data['title'] = ucfirst($page); // deixa primeira letra maiuscula
        // quando passado na view, o nome da variavel é o nome da chave

        // chama view header, passa o dado 'data', chama view pages, chama footer
        return view ('templates/header', $data)
        . view('pages/' . $page)
        . view('templates/footer');
    }


}
