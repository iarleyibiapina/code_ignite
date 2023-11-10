<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\RequestInterface;
use App\Models\ToDoUserModel;
class ToDoController extends BaseController
{
    // esquema de rotas com resource, onde * é dinamico

    /*
    GET	    To_Do	        \App\Controllers\ToDoController::index
    GET	    To_Do/new	    \App\Controllers\ToDoController::new
    GET	    To_Do/(.*)/edit \App\Controllers\ToDoController::edit/$1
    GET	    To_Do/(.*)      \App\Controllers\ToDoController::show/$1
    POST	To_Do	        \App\Controllers\ToDoController::create
    PUT	    To_Do/(.*)	    \App\Controllers\ToDoController::update/$1
    DELETE	To_Do/(.*)	    \App\Controllers\ToDoController::delete/$1
    */

    // (index) -> new -> create
    // (show) -> edit -> update
    // delete

    /*
    GET	    To_Do	        \App\Controllers\ToDoController::index
    GET	    To_Do/new	    \App\Controllers\ToDoController::new
    POST	To_Do	        \App\Controllers\ToDoController::create
    GET	    To_Do/(.*)/edit \App\Controllers\ToDoController::edit/$1
    PUT	    To_Do/(.*)	    \App\Controllers\ToDoController::update/$1
    DELETE	To_Do/(.*)	    \App\Controllers\ToDoController::delete/$1
    */

    //find(), insert(), update(), delete()
    public function index()
    {
        // echo 'index';
        // $data = [
        //     'nome' => 'Um tutilo',
        //     'corpo' => 'Um corpo',
        // ];
        $model = model(ToDoUserModel::class);

        $data['data'] = $model->findAll();

        dd($data);

        return view('Pages/main') . $data;
    }

    public function new(){
        // echo 'new';
        return view('Pages/ToDo/create');
    }

    public function create(){
        // echo 'create'
        // pegar dados enviado pelo metodo post,
        $dados = [
            'to_do_name' => request()->getPost('to_do_name'),
            'to_do_body' => request()->getPost('to_do_body'),
        ];
        // dd($dados);
        // $model = model(ToDoUserModel::class);
        // $model->save($dados);
        model(ToDoUserModel::class)->save($dados);
        return redirect()->to('/To_Do');
    }
    public function edit(){
        echo 'edit';
        // return view("Pages/ToDo/create");
    }
    public function update(){
        echo 'update';
    }
    public function delete(){
        echo 'delete';
    }
}
