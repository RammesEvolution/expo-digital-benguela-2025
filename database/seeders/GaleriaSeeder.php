<?php

namespace Database\Seeders;

use App\Models\Galeria;
use Illuminate\Database\Seeder;

class GaleriaSeeder extends Seeder
{
    public function run(): void
    {
        $imagens = [
            ['evento_id' => 1, 'titulo' => 'Intervenção do Governador', 'caminho_imagem' => '/images/cafe-imprensa/img-1.jpg', 'ordem' => 1],
            ['evento_id' => 1, 'titulo' => 'Participantes', 'caminho_imagem' => '/images/cafe-imprensa/img-2.jpg', 'ordem' => 2],
            ['evento_id' => 1, 'titulo' => 'Participantes', 'caminho_imagem' => '/images/cafe-imprensa/img-3.jpg', 'ordem' => 3],
            ['evento_id' => 1, 'titulo' => 'Participantes', 'caminho_imagem' => '/images/cafe-imprensa/img-4.jpg', 'ordem' => 4],
            ['evento_id' => 1, 'titulo' => 'Participantes', 'caminho_imagem' => '/images/cafe-imprensa/img-5.jpg', 'ordem' => 5],
            ['evento_id' => 1, 'titulo' => 'Participantes', 'caminho_imagem' => '/images/cafe-imprensa/img-6.jpg', 'ordem' => 6],
            ['evento_id' => 1, 'titulo' => 'Participantes', 'caminho_imagem' => '/images/cafe-imprensa/img-7.jpg', 'ordem' => 7],
            ['evento_id' => 1, 'titulo' => 'Intervenção', 'caminho_imagem' => '/images/cafe-imprensa/img-8.jpg', 'ordem' => 8],
            ['evento_id' => 1, 'titulo' => 'Intervenção', 'caminho_imagem' => '/images/cafe-imprensa/img-9.jpg', 'ordem' => 9],
            ['evento_id' => 1, 'titulo' => 'Intervenção', 'caminho_imagem' => '/images/cafe-imprensa/img-10.jpg', 'ordem' => 10],
            
            
        ];

        foreach ($imagens as $imagem) {
            Galeria::create($imagem);
        }
    }
}
