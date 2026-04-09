<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('carros', function (Blueprint $table) {
            $table->id('cd_carro');
            $table->foreignId('cd_nome')->constrained('nome_carros', 'cd_nome');
            $table->foreignId('cd_montadora')->constrained('montadoras', 'cd_montadora');
            $table->foreignId('cd_categoria')->constrained('categorias', 'cd_categoria');
            $table->foreignId('cd_tipo_motor')->constrained('tipo_motores', 'cd_tipo_motor');
            $table->foreignId('cd_revendedora')->constrained('revendedoras', 'cd_revendedora');
            $table->integer('ano');
            $table->string('modelo', 100);
            $table->string('placa', 10)->unique();
            $table->decimal('capacidade_tanque', 8, 2);
            $table->string('cor', 50)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('carros');
    }
};
