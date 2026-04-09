<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('avaliacoes', function (Blueprint $table) {
            $table->id('cd_avaliacao');
            $table->foreignId('cd_locacao')->constrained('locacoes', 'cd_locacao');
            $table->foreignId('cd_avaliador')->constrained('funcionarios', 'cd_funcionario');
            $table->integer('km_chegada');
            $table->decimal('volume_combustivel', 5, 2);
            $table->decimal('valor_km', 10, 2)->default(0);
            $table->decimal('valor_combustivel', 10, 2)->default(0);
            $table->decimal('valor_danos', 10, 2)->default(0);
            $table->date('data_chegada');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('avaliacoes');
    }
};
