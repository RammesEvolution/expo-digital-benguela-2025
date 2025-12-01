<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inscricoes_newsletter', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('nome')->nullable();
            $table->enum('tipo_utilizador', ['visitante', 'expositor', 'organizador'])->default('visitante');
            $table->boolean('verificada')->default(false);
            $table->timestamp('inscrito_em')->nullable();
            $table->timestamp('cancelado_em')->nullable();
            $table->timestamps();
            $table->index('verificada');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inscricoes_newsletter');
    }
};
