<?php

namespace Database\Seeders;

use App\Models\Inscricao;
use Illuminate\Database\Seeder;

class NewsletterSeeder extends Seeder
{
    public function run(): void
    {
        $emails = [
            ['email' => 'contacto@expodigital.ao', 'nome' => 'Expo Digital', 'tipo_utilizador' => 'organizador', 'verificada' => true],
            ['email' => 'empresa1@tech.ao', 'nome' => 'Empresa Tech Angola', 'tipo_utilizador' => 'expositor', 'verificada' => true],
            ['email' => 'empresa2@startup.ao', 'nome' => 'Startup Benguela', 'tipo_utilizador' => 'expositor', 'verificada' => false],
            ['email' => 'cidadao1@email.ao', 'nome' => 'João Cidadão', 'tipo_utilizador' => 'visitante', 'verificada' => true],
            ['email' => 'cidadao2@email.ao', 'nome' => 'Maria Visitante', 'tipo_utilizador' => 'visitante', 'verificada' => false],
            ['email' => 'instituicao@gov.ao', 'nome' => 'Instituição Pública', 'tipo_utilizador' => 'organizador', 'verificada' => true],
        ];

        foreach ($emails as $email) {
            Inscricao::create([
                'email' => $email['email'],
                'nome' => $email['nome'],
                'tipo_utilizador' => $email['tipo_utilizador'],
                'verificada' => $email['verificada'],
                'inscrito_em' => now(),
            ]);
        }
    }
}
