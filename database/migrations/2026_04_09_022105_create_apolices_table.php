<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('apolices', function (Blueprint $table) {
            $table->id('cd_apolice');
            $table->foreignId('cd_seguradora')->constrained('seguradoras', 'cd_seguradora');
            $table->foreignId('cd_carro')->constrained('carros', 'cd_carro');
            $table->decimal('valor', 10, 2);
            $table->date('vencimento');
            $table->date('data_pagamento')->nullable();
            $table->boolean('pago')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('apolices');
    }
};
