<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;
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
            return redirect()->to('/register')->withInput();
        }
        
        $post = $this->validator->getValidated();

        $model = model(UsuarioModel::class);

        // if($model->where('email_usuario', $post['email'])->first() || $model->where('senha_usuario', $post['senha'])->first()) {
        //     session()->setFlashdata('erro', ['Usuario existente']);
        //     return redirect()->to('/register')->withinput();
        // }

        $user = $model->where('email_usuario', $post['email'])->first();

            // dd($user['senha_usuario']);
            // dd($post['senha']);

        // if(!$user || !password_verify($post['senha'], $user['senha_usuario'])){
        // if(!$user || $post['senha'] == $user['senha_usuario']){
        if($post['senha'] == $user['senha_usuario']){
            session()->setFlashdata('erro', ['Usuario existente']);
            return redirect()->to('/register')->withinput();            
        }

        // dd($post);
        $model->save([
            'nome_usuario' => $post['nome'],
            'email_usuario' => $post['email'],
            'senha_usuario' => $post['senha'],
        ]);


        // $model = model(s)
        // redireciona index
        return view('index');
    }
}
