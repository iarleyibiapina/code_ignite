<?php

namespace App\Controllers\Api;

use App\Controllers\BaseController;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\Api\ApiEstudo;

class LivroController extends BaseController
{
    use ResponseTrait;
    
    public function index()
    {
        //
        $model = new ApiEstudo();
        $data = $model->findAll();
    // return $this->response->set_status_header(200)->set_output(json_encode($data));
        return $this->respond($data);
    }

    public function show($id = null){
        $model = new ApiEstudo();
        // $data = $model->find($id);
        $data = $model->getWhere(['id_livro' => $id])->getResult();

        if($data){
            return $this->respond($data);
        } 

        return $this->failNotFound("nao encontrado");
    }

    public function create(){
        $model = new ApiEstudo();
        $data = $this->request->getJSON();

        if($model->insert($data)){
            $response = [
                'status' => 201,
                'error' => null,
                'message' => [
                    'success' => 'dados salvo',
                ]
            ];
            return $this->respondCreated($response);
        } 
        return $this->fail($model->errors());
    }

    public function update($id = null){
        $model = new ApiEstudo();
        $data = $this->request->getJSON();
        // $data = $this->request->getRawInput();

        if($model->update($id, $data)){
            $response = [
                'status' => 200,
                'error' => null,
                'message' => [
                    'success'=> 'atualizado',
                ],
            ];
            return $this->respondUpdated($response);
        } 
        return $this->fail($model->errors());
    }

    public function delete($id = null){
        $model = new ApiEstudo();
        $data = $model->find($id);

        if($data){
            $model->delete($id);
            $response = [
                'status' => 200,
                'error' => null,
                'messages' => [
                    'success'=> 'removido',
                ]
            ];
            return $this->respondDeleted($response);
        }
        return $this->failNotFound('nenhum dado encontrado');
    }

    /*
    No postman

    GET  /api/  (index) exibe tudo 
    GET  /api/1 (show) exibe 1 especifico
    POST /api/ (create) inserir dados no post, ir em body -> raw -> JSON
    {
    "auto": "novo",
    "descricao" : "descricao"
    }
    PUT /api/2 (update) mesmo esquema de create
    DELETE /api/3 (delete)
    */
}
