<?php

namespace App\Controllers\Consumir;

use App\Controllers\BaseController;
use Exception;


class ConsumirController extends BaseController
{

    // ESSE CODIGO FICA EM OUTRO PROJETO, CONSULTANDO A API. em outro projeto
    // deve ser inicado em porta 8080, consumindo a porta deste projeto 9090
    public function index()
    {
        //
        $var = service('curlrequest');

        try{
            $response = $var->request('GET', 'http://localhost:9090/api');
            $listaLivros = json_decode($response->getBody(), true);
            // dd($listaLivros);
            foreach($listaLivros as $livro){
                echo 'LIVRO: '. $livro['autor'] . '    DESCRICAO: ' .  $livro['descricao'] . '<br>';
            }
        } catch(Exception $e){
            echo $e->getMessage();
        }
    }
    public function create(){

        /* post 
        header: -token (nessa caso um numero simples)
        
        parametro: -autor, descricao
        
        retorn: -msg
        
        */
        $var = service('curlrequest');

        $header = [
            'token' => '',
        ];

        $parametro = [
            // dados que serao enviados
            'autor' => "enviandoNomeApi",
            'descricao' => "enviandoDescricaoApi"
        ];

        try{
            // agora passa dois parametros, sendo o cabeçalho e os parametros com os 'subs' parametros
            // 'headers' => $header,
            $response = $var->request('POST', 'http://localhost:9090/api', [
                'json' => $parametro,
                'http_errors' => false,
            ]);

            $listaLivros = json_decode($response->getBody(), true);
            
            echo ($response->getStatusCode()); 
            echo ($response->getBody());
            // dd($listaLivros);
        } catch(Exception $e){
            echo $e->getMessage();
        }
    }
}
