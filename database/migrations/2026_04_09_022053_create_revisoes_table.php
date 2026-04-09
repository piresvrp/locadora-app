<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('revisoes', function (Blueprint $table) {
            $table->id('cd_revisao');
            $table->foreignId('cd_carro')->constrained('carros', 'cd_carro');
            $table->foreignId('cd_empresa')->constrained('empresas_autorizadas', 'cd_empresa');
            $table->decimal('valor', 10, 2);
            $table->boolean('pago')->default(false);
            $table->date('data_revisao');
            $table->integer('km_do_carro');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('revisoes');
    }
};
