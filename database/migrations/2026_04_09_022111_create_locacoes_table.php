<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('locacoes', function (Blueprint $table) {
            $table->id('cd_locacao');
            $table->foreignId('cd_diaria')->constrained('diarias', 'cd_diaria');
            $table->foreignId('cd_carro')->constrained('carros', 'cd_carro');
            $table->foreignId('cd_cliente')->constrained('clientes', 'cd_cliente');
            $table->date('data_locacao');
            $table->date('data_saida');
            $table->date('data_chegada')->nullable();
            $table->boolean('pago')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('locacoes');
    }
};
