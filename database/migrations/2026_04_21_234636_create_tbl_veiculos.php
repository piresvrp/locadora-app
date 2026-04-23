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
        Schema::create('tbl_veiculos', function (Blueprint $table) {
            $table->id('col_id');
            $table->timestamps();
            $table->foreignId('col_id_tbl_modelo_veiculo')->constrained('tbl_modelos_veiculos', 'col_id');
            $table->foreignId('col_id_tbl_cor')->nullable()->constrained('tbl_cores', 'col_id');
            $table->foreignId('col_id_tbl_unidade_atual')->nullable()->constrained('tbl_unidades', 'col_id');
            $table->foreignId('col_id_tbl_status_veiculo')->constrained('tbl_status_veiculos', 'col_id');
            $table->string('col_placa', 10)->unique();
            $table->string('col_chassi', 30)->unique();
            $table->string('col_renavam', 20)->unique();
            $table->string('col_patrimonio', 30)->unique()->nullable();
            $table->decimal('col_km_atual', 10, 1)->default(0);
            $table->decimal('col_combustivel_percentual', 5, 2)->default(0);
            $table->date('col_data_aquisicao')->nullable();
            $table->decimal('col_valor_aquisicao', 12, 2)->nullable();
            $table->decimal('col_valor_diaria_base', 10, 2)->nullable();
            $table->text('col_observacoes')->nullable();
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
        Schema::dropIfExists('tbl_veiculos');
    }
};
