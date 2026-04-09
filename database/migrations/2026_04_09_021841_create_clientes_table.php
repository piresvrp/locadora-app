<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id('cd_cliente');
            $table->foreignId('cd_tipo_cliente')->constrained('tipo_clientes', 'cd_tipo_cliente');
            $table->string('cidade', 100)->nullable();
            $table->string('estado', 2)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('clientes');
    }
};
