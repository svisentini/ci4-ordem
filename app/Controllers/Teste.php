<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Teste extends BaseController
{
    public function index()
    {
        // echo 'Esse é o controller Teste';

        $data = [
            'titulo' => 'Enviando dados do controller para a view',
            'outro' => 'Outra coisa',
        ];

        return view('teste', $data);
    }

    public function minha(){

        $corModel = new \App\Models\CorModel();




        $dados = [
            'cores' => $corModel->findAll(),
            'info' => 'Possiveis cores:',
        ];

        // echo 'Esse é o metodo minha() dentro do controller Teste';
        return view ('minha', $dados);
    }
}
