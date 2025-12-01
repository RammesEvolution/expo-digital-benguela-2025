<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->longText('descricao')->nullable();
            $table->dateTime('data_inicio');
            $table->dateTime('data_fim');
            $table->string('localizacao')->nullable();
            $table->integer('capacidade')->nullable();
            $table->string('categoria');
            $table->enum('estado', ['planejado', 'confirmado', 'cancelado'])->default('planejado');
            $table->timestamps();
            $table->softDeletes();
            $table->index('categoria');
            $table->index('data_inicio');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('eventos');
    }
};
