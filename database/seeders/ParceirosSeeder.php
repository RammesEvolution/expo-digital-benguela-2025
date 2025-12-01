<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ParceirosSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('parceiros')->insert([
            [
                'nome' => 'Movicel',
                'descricao' => 'Operadora de telecomunicações',
                'caminho_logo' => 'logos/movicel.png',
                'url_site' => 'https://www.movicel.ao',
                'ordem' => 1,
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Paratus',
                'descricao' => 'Empresa de tecnologia e serviços',
                'caminho_logo' => 'logos/paratus.png',
                'url_site' => 'https://www.paratus.ao',
                'ordem' => 2,
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Inapem',
                'descricao' => 'Instituto Nacional de Apoio à Pequena e Média Empresa',
                'caminho_logo' => 'logos/inapem.png',
                'url_site' => 'https://www.inapem.ao',
                'ordem' => 3,
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'SerJob',
                'descricao' => 'Serviços de transporte e aluguer de carros',
                'caminho_logo' => 'logos/serjob.png',
                'url_site' => '#',
                'ordem' => 4,
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'HCB',
                'descricao' => 'Grupo Comercial Higino Chumbo Baptista',
                'caminho_logo' => 'logos/hcb.png',
                'url_site' => '#',
                'ordem' => 5,
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Africell',
                'descricao' => 'Operadora de telecomunicações',
                'caminho_logo' => 'logos/africell.png',
                'url_site' => 'https://www.africell.ao',
                'ordem' => 6,
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'RAMMES',
                'descricao' => 'Serviços de Tecnologia e Inovação',
                'caminho_logo' => 'logos/mes.png',
                'url_site' => '#',
                'ordem' => 7,
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Tombosy',
                'descricao' => 'Empresa de Comunicação e Mídia',
                'caminho_logo' => 'logos/trombay.png',
                'url_site' => '#',
                'ordem' => 8,
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nome' => 'Grupo AA',
                'descricao' => 'Aderto Areias - Grupo Empresarial',
                'caminho_logo' => 'logos/grupoaa.png',
                'url_site' => '#',
                'ordem' => 9,
                'ativo' => true,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
