<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Administrador Expo Digital',
            'email' => 'admin@expodigital.ao',
            'password' => Hash::make('senha123456'),
            'role' => 'admin',
            'phone' => '+244222123456',
            'company' => 'Governo Provincial de Benguela',
        ]);
/*
        User::create([
            'name' => 'João Silva Expositor',
            'email' => 'joao@empresa.ao',
            'password' => Hash::make('senha123456'),
            'role' => 'expositor',
            'phone' => '+244923456789',
            'company' => 'Empresa Tecnológica Angola',
        ]);

        User::create([
            'name' => 'Maria Santos Visitante',
            'email' => 'maria@email.ao',
            'password' => Hash::make('senha123456'),
            'role' => 'visitante',
            'phone' => '+244912345678',
        ]);

        User::create([
            'name' => 'Carlos Expositor',
            'email' => 'carlos@startup.ao',
            'password' => Hash::make('senha123456'),
            'role' => 'expositor',
            'phone' => '+244934567890',
            'company' => 'Startup Digital Benguela',
        ]);

        User::create([
            'name' => 'Ana Visitante',
            'email' => 'ana@universidade.ao',
            'password' => Hash::make('senha123456'),
            'role' => 'visitante',
            'phone' => '+244945678901',
        ]);
        */
    }
}
