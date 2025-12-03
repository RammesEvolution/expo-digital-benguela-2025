<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('expositores', function (Blueprint $table) {
            $table->id();
            $table->string('nome_completo');
            $table->string('nif_bi')->unique(); // NIF ou B.I.
            $table->string('email')->unique();
            $table->string('telefone')->nullable();
            $table->longText('manifestacao_interesse');
            $table->longText('projeto_apresentar');
            $table->enum('tipo_entidade', ['singular', 'coletiva']);
            $table->enum('status', ['pendente', 'aprovado', 'rejeitado'])->default('pendente');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('expositores');
    }
};