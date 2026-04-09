<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('impostos', function (Blueprint $table) {
            $table->id('cd_imposto');
            $table->foreignId('cd_tipo_imposto')->constrained('tipo_impostos', 'cd_tipo_imposto');
            $table->decimal('valor', 10, 2);
            $table->date('data_pagamento')->nullable();
            $table->date('vencimento');
            $table->boolean('pago')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('impostos');
    }
};
