<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('telefones', function (Blueprint $table) {
            $table->id('cd_telefone');
            $table->foreignId('cd_cliente')->constrained('clientes', 'cd_cliente')->onDelete('cascade');
            $table->string('numero', 20);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('telefones');
    }
};
