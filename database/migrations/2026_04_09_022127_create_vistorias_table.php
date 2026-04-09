<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('vistorias', function (Blueprint $table) {
            $table->id('cd_vistoria');
            $table->foreignId('cd_locacao')->constrained('locacoes', 'cd_locacao');
            $table->foreignId('cd_avaliador')->constrained('funcionarios', 'cd_funcionario');
            $table->integer('km_saida');
            $table->decimal('volume_combustivel', 5, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('vistorias');
    }
};
