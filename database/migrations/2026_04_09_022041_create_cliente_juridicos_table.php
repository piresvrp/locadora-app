<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cliente_juridicos', function (Blueprint $table) {
            $table->id('cd_juridico');
            $table->foreignId('cd_cliente')->constrained('clientes', 'cd_cliente')->onDelete('cascade');
            $table->string('cnpj', 18)->unique();
            $table->string('razao_social', 150);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cliente_juridicos');
    }
};
