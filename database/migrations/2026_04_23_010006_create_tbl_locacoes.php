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
        Schema::create('tbl_locacoes', function (Blueprint $table) {
            $table->id('col_id');
            $table->string('col_numero_contrato', 30)->unique();
            $table->foreignId('col_id_tbl_reserva')->nullable()->constrained('tbl_reservas', 'col_id');
            $table->foreignId('col_id_tbl_cliente')->constrained('tbl_clientes', 'col_id');
            $table->foreignId('col_id_tbl_veiculo')->constrained('tbl_veiculos', 'col_id');
            $table->foreignId('col_id_tbl_tabela_tarifaria')->constrained('tbl_tabelas_tarifarias', 'col_id');
            $table->foreignId('col_id_tbl_unidade_retirada')->constrained('tbl_unidades','col_id');
            $table->foreignId('col_id_tbl_unidade_devolucao_prevista')->constrained('tbl_unidades','col_id');
            $table->dateTime('col_data_hora_retirada');
            $table->dateTime('col_data_hora_devolucao_prevista');
            $table->dateTime('col_data_hora_devolucao_real')->nullable();
            $table->decimal('col_km_saida', 10, 1)->default(0);
            $table->decimal('col_km_retorno', 10, 1)->nullable();
            $table->decimal('col_combustivel_saida', 5, 2)->default(0);
            $table->decimal('col_combustivel_retorno', 5, 2)->nullable();
            $table->string('col_status_locacao', 30);
            $table->decimal('col_valor_previsto', 12, 2)->nullable();
            $table->decimal('col_valor_final', 12, 2)->nullable();
            $table->decimal('col_caucao_valor', 12, 2)->nullable();
            $table->text('col_observacoes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_locacoes');
    }
};
