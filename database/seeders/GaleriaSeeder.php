<?php

namespace Database\Seeders;

use App\Models\Galeria;
use Illuminate\Database\Seeder;

class GaleriaSeeder extends Seeder
{
    public function run(): void
    {
        $imagens = [
            ['evento_id' => 1, 'titulo' => 'Abertura Oficial - Momentos Iniciais', 'caminho_imagem' => '/images/galeria/abertura-1.jpg', 'ordem' => 1],
            ['evento_id' => 1, 'titulo' => 'Discurso do Governador', 'caminho_imagem' => '/images/galeria/abertura-2.jpg', 'ordem' => 2],
            ['evento_id' => 1, 'titulo' => 'Público na Cerimónia de Abertura', 'caminho_imagem' => '/images/galeria/abertura-3.jpg', 'ordem' => 3],
            
            ['evento_id' => 2, 'titulo' => 'Palestra em Curso', 'caminho_imagem' => '/images/galeria/palestra-1.jpg', 'ordem' => 1],
            ['evento_id' => 2, 'titulo' => 'Questões do Público', 'caminho_imagem' => '/images/galeria/palestra-2.jpg', 'ordem' => 2],
            
            ['evento_id' => 3, 'titulo' => 'Workshop Segurança - Equipamento', 'caminho_imagem' => '/images/galeria/workshop-1.jpg', 'ordem' => 1],
            ['evento_id' => 3, 'titulo' => 'Participantes em Ação', 'caminho_imagem' => '/images/galeria/workshop-2.jpg', 'ordem' => 2],
            
            ['evento_id' => 4, 'titulo' => 'Rodada de Negócios - Encontros', 'caminho_imagem' => '/images/galeria/negocios-1.jpg', 'ordem' => 1],
            ['evento_id' => 4, 'titulo' => 'Apresentações de Startups', 'caminho_imagem' => '/images/galeria/negocios-2.jpg', 'ordem' => 2],
            
            ['evento_id' => 5, 'titulo' => 'IA para PME - Demonstração', 'caminho_imagem' => '/images/galeria/ia-1.jpg', 'ordem' => 1],
            ['evento_id' => 5, 'titulo' => 'Interação com Público', 'caminho_imagem' => '/images/galeria/ia-2.jpg', 'ordem' => 2],
            
            ['evento_id' => 6, 'titulo' => 'Prémios Expo Digital', 'caminho_imagem' => '/images/galeria/premios-1.jpg', 'ordem' => 1],
            ['evento_id' => 6, 'titulo' => 'Momento de Encerramento', 'caminho_imagem' => '/images/galeria/premios-2.jpg', 'ordem' => 2],
            ['evento_id' => 6, 'titulo' => 'Grupo Final', 'caminho_imagem' => '/images/galeria/premios-3.jpg', 'ordem' => 3],
        ];

        foreach ($imagens as $imagem) {
            Galeria::create($imagem);
        }
    }
}
