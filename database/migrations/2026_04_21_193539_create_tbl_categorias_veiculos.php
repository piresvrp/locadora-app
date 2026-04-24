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
        Schema::create('tbl_categorias_veiculos', function (Blueprint $table) {
            $table->id('col_id');
            $table->string('col_nome', 80);
            $table->string('col_descricao', 255)->nullable();
            $table->unsignedSmallInteger('col_qtd_portas')->nullable();
            $table->unsignedSmallInteger('col_capacidade_bagagem')->nullable();
            $table->unsignedSmallInteger('col_capacidade_passageiros')->nullable();
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
        Schema::dropIfExists('tbl_categorias_veiculos');
    }
};
