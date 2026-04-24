<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tbl_condutores_adicionais', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_cliente')->constrained('tbl_clientes', 'col_id');
            $table->string('col_nome', 150);
            $table->string('col_cpf', 14)->nullable();
            $table->string('col_cnh_numero', 30)->nullable();
            $table->string('col_cnh_categoria', 10)->nullable();
            $table->date('col_cnh_validade')->nullable();
            $table->string('col_telefone', 20)->nullable();
            $table->boolean('col_ativo')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_condutores_adicionais');
    }
};
