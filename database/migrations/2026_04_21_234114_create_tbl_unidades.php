<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void
    {
        Schema::create('tbl_unidades', function (Blueprint $table) {
            $table->id('col_id');
            $table->string('col_nome', 120);
            $table->string('col_tipo_unidade', 30)->nullable();
            $table->string('col_telefone', 20)->nullable();
            $table->string('col_email', 120)->nullable();
            $table->string('col_cep', 10)->nullable();
            $table->string('col_logradouro', 150)->nullable();
            $table->string('col_numero', 20)->nullable();
            $table->string('col_bairro', 80)->nullable();
            $table->string('col_cidade', 80)->nullable();
            $table->char('col_uf', 2)->nullable();
            $table->boolean('col_ativo')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tbl_unidades');
    }
};
