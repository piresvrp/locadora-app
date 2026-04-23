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
        Schema::create('tbl_clientes', function (Blueprint $table) {
            $table->id('col_id');
            $table->char('col_tipo_pessoa', 2);
            $table->string('col_nome_razao_social', 150);
            $table->string('col_nome_fantasia', 150)->nullable();
            $table->string('col_cpf_cnpj', 18)->unique();
            $table->string('col_rg_ie', 30)->nullable();
            $table->string('col_cnh_numero', 30)->nullable();
            $table->string('col_cnh_categoria', 10)->nullable();
            $table->date('col_cnh_validade')->nullable();
            $table->date('col_data_nascimento')->nullable();
            $table->string('col_email', 120)->nullable();
            $table->string('col_telefone', 20)->nullable();
            $table->string('col_cep', 10)->nullable();
            $table->string('col_logradouro', 150)->nullable();
            $table->string('col_numero', 20)->nullable();
            $table->string('col_bairro', 80)->nullable();
            $table->string('col_cidade', 80)->nullable();
            $table->char('col_uf', 2)->nullable();
            $table->decimal('col_score_interno', 5, 2)->nullable();
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
        Schema::dropIfExists('tbl_clientes');
    }
};
