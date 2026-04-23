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
        Schema::create('tbl_ordens_servicos', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_veiculo')->constrained('tbl_veiculos', 'col_id');
            $table->string('col_tipo_servico', 40);
            $table->string('col_fornecedor', 150)->nullable();
            $table->date('col_data_abertura')->nullable();
            $table->date('col_data_execucao')->nullable();
            $table->decimal('col_km_veiculo', 10, 1)->nullable();
            $table->decimal('col_valor_total', 12, 2)->nullable();
            $table->string('col_status_os', 30)->nullable();
            $table->text('col_observacoes')->nullable();
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_ordens_servicos');
    }
};
