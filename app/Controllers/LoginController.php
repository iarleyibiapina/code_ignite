<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

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
        helper('form');

        if(!$this->validate([
            'nome' => [
                'rules' =>'required',
                'errors' => [
                  'required' => '{field} é obrigatório'
                ]
            ],
            'email' => [
                'rules' =>'required|valid_email',
                'errors' => [
                  'required' => '{field} é obrigatório',
                    'valid_email' => 'Insira um email válido'
                ]
            ],
            'senha' => [
                'rules' =>'required',
                'errors' => [
                  'required' => '{field} é obrigatório'
                ]
            ],

        ]))
        {
            session()->setFlashdata('erro', $this->validator->getErrors());
            return redirect()->to('/login')->withInput();
        }        

        $post = $this->validator->getValidated();
        $model = model(UsuarioModel::class);
        $user = $model->where('email_usuario', $post['email'])->first();
        
        if(!$user){
            session()->setFlashdata('erro', ['Usuario não encontrado']);
            return redirect()->to('/login')->withInput();
        } 
        if($user['senha_usuario'] != $post['senha']){
            session()->setFlashdata('erro', ['Senha ou Email incorreto']);
            return redirect()->to('/login')->withInput();
        }
        // redireciona home e 'loga'
        $usuarioLogado = [
            'logado' => true,
            'nomeDeUsuario' => $user['nome_usuario'],
        ];

        session()->set('usuarioLogado', $usuarioLogado);

        return redirect()->to('main');
    }
}
