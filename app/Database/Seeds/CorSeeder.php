<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class CorSeeder extends Seeder
{
    public function run()
    {
        $corModel = new \App\Models\CorModel();

        $cores = [
            [
                'nome' => 'Amarela',
            ],
            [
                'nome' => 'Azul',
            ],
            [
                'nome' => 'Vemelha',
            ],
            [
                'nome' => 'Verde',
            ],
            [
                'nome' => 'Branca',
            ],
            [
                'nome' => 'Preta',
            ],
        ];

        // dd($cores);

        foreach ($cores as $cor){
            $corModel->insert($cor);
        }

        echo 'Cores inseridas com Sucesso !';

    }
}
