<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('parceiros', function (Blueprint $table) {
            $table->id();
            $table->string('nome')->unique();
            $table->string('caminho_logo')->nullable(); // Caminho da logo
            $table->string('url_site')->nullable(); // URL do site do parceiro
            $table->integer('ordem')->default(0); // Para ordenação personalizada
            $table->boolean('ativo')->default(true);
            $table->text('descricao')->nullable();
            $table->timestamps();
            $table->softDeletes();

            // Índices
            $table->index('ativo');
            $table->index('ordem');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('parceiros');
    }
};
