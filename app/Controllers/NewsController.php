<?php

namespace App\Controllers;

use App\Models\NewsModel;
use App\Controllers\BaseController;
use CodeIgniter\Exceptions\PageNotFoundException;

class NewsController extends BaseController
{
    public function index()
    {
        //
        $model = model(NewsModel::class);

        $data = [
            'news'  => $model->getNews(),
            'title' => 'News archive',
        ];

        return view('templates/header', $data)
            . view('news/index')
            . view('templates/footer');
    }

    public function show($slug = null){
        
        $model = model(NewsModel::class);

        $data['news'] = $model->getNews($slug);

        if (empty($data['news'])) {
            throw new PageNotFoundException('Cannot find the news item: ' . $slug);
        }

        $data['title'] = $data['news']['title'];

        return view('templates/header', $data)
            . view('news/view')
            . view('templates/footer');
    }

    public function new(){
        //
        helper('form');

        return view('templates/header', ['title' => 'New News'])
        .view('news/create')
        .view('templates/footer');
    }

    public function create(){
        helper('form');

        //checar validação de dados
        if(!$this->validate([
            'title' => 'required|max_length[255]|min_length[5]',
            'body' => 'required|max_length[255]|min_length[5]',
        ])){
            //se falhar retornar ao formulario
            return $this->new();
        };

        //pegar os dados

        $post = $this->validator->getValidated();

        $model = model(NewsModel::class);

        // save , tambem serve para update
        $model->save([
            'title' => $post['title'],
            'slug' => url_title($post['title'], '-', true),
            'body' => $post['body'],
        ]);

        return view('templates/header', ['title' => 'New News created'])
        .view('news/success')
        .view('templates/footer');
    }
}
