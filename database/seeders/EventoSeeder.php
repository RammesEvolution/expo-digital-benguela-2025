<?php

namespace Database\Seeders;

use App\Models\Evento;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class EventoSeeder extends Seeder
{
    public function run(): void
    {
        $eventos = [
            [
                'titulo' => 'Café Imprensa',
                'descricao' => 'Um encontro onde todos tiveram voz e vez',
                'data_inicio' => Carbon::createFromFormat('Y-m-d H:i', '2025-06-20 10:00'),
                'data_fim' => Carbon::createFromFormat('Y-m-d H:i', '2025-06-20 15:30'),
                'localizacao' => 'Sala Principal',
                'capacidade' => 300,
                'categoria' => '',
                'estado' => 'confirmado',
            ],
            [
                'titulo' => 'Abertura Oficial Expo Digital 2025',
                'descricao' => 'Cerimónia de abertura com presença do Governador Provincial de Benguela',
                'data_inicio' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-18 09:00'),
                'data_fim' => Carbon::createFromFormat('Y-m-d H:i', '2025-12-19 11:30'),
                'localizacao' => 'Centro de Convenções Benguela',
                'capacidade' => 500,
                'categoria' => 'Abertura',
                'estado' => 'confirmado',
            ],
            
        ];

        foreach ($eventos as $evento) {
            Evento::create($evento);
        }
    }
}
