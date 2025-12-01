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
                'titulo' => 'Abertura Oficial Expo Digital 2025',
                'descricao' => 'Cerimónia de abertura com presença do Governador Provincial de Benguela',
                'data_inicio' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-10 09:00'),
                'data_fim' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-10 11:30'),
                'localizacao' => 'Centro de Convenções Benguela',
                'capacidade' => 500,
                'categoria' => 'Abertura',
                'estado' => 'confirmado',
            ],
            [
                'titulo' => 'Palestra: Transformação Digital no Sector Público',
                'descricao' => 'Discussão sobre ferramentas digitais para modernização dos serviços públicos',
                'data_inicio' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-10 14:00'),
                'data_fim' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-10 15:30'),
                'localizacao' => 'Sala Principal',
                'capacidade' => 300,
                'categoria' => 'Palestra',
                'estado' => 'confirmado',
            ],
            [
                'titulo' => 'Workshop: Segurança em Tecnologia',
                'descricao' => 'Treinamento prático sobre segurança cibernética e proteção de dados',
                'data_inicio' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-11 10:00'),
                'data_fim' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-11 12:00'),
                'localizacao' => 'Sala B - Workshop',
                'capacidade' => 80,
                'categoria' => 'Workshop',
                'estado' => 'confirmado',
            ],
            [
                'titulo' => 'Rodada de Negócios: Investimento Tecnológico',
                'descricao' => 'Encontro entre investidores e startups de tecnologia',
                'data_inicio' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-11 16:00'),
                'data_fim' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-11 18:00'),
                'localizacao' => 'Sala de Negócios',
                'capacidade' => 150,
                'categoria' => 'Negócios',
                'estado' => 'confirmado',
            ],
            [
                'titulo' => 'Apresentação: Inteligência Artificial para PME',
                'descricao' => 'Como pequenas e médias empresas podem usar IA',
                'data_inicio' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-12 11:00'),
                'data_fim' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-12 12:30'),
                'localizacao' => 'Auditório Principal',
                'capacidade' => 250,
                'categoria' => 'Apresentação',
                'estado' => 'confirmado',
            ],
            [
                'titulo' => 'Encerramento e Prémios Expo Digital 2025',
                'descricao' => 'Encerramento da expo com prémios aos melhores expositores',
                'data_inicio' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-12 17:00'),
                'data_fim' => Carbon::createFromFormat('Y-m-d H:i', '2025-02-12 19:00'),
                'localizacao' => 'Centro de Convenções Benguela',
                'capacidade' => 600,
                'categoria' => 'Encerramento',
                'estado' => 'confirmado',
            ],
        ];

        foreach ($eventos as $evento) {
            Evento::create($evento);
        }
    }
}
