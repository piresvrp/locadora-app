<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('alinhamentos', function (Blueprint $table) {
            $table->id('cd_alinhamento');
            $table->foreignId('cd_carro')->constrained('carros', 'cd_carro');
            $table->foreignId('cd_empresa')->constrained('empresas_autorizadas', 'cd_empresa');
            $table->decimal('valor', 10, 2);
            $table->date('data_alinhamento');
            $table->integer('km_do_carro');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('alinhamentos');
    }
};
