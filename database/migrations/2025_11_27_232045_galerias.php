<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('galerias', function (Blueprint $table) {
            $table->id();
            $table->foreignId('evento_id')->nullable()->constrained('eventos')->onDelete('cascade');
            $table->string('titulo');
            $table->string('caminho_imagem');
            $table->text('descricao')->nullable();
            $table->integer('ordem')->default(0);
            $table->timestamps();
            $table->softDeletes();
            $table->index('evento_id');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('galerias');
    }
};
