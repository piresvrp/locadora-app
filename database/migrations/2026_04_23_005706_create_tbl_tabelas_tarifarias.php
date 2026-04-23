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
        Schema::create('tbl_tabelas_tarifarias', function (Blueprint $table) {
            $table->id('col_id');
            $table->string('col_nome', 100);
            $table->foreignId('col_id_tbl_categoria_veiculo')->constrained('tbl_categorias_veiculos','col_id');
            $table->decimal('col_diaria_base', 10, 2);
            $table->decimal('col_km_inclusa_dia', 10, 1)->nullable();
            $table->decimal('col_valor_km_excedente', 10, 2)->nullable();
            $table->decimal('col_valor_hora_extra', 10, 2)->nullable();
            $table->date('col_vigencia_inicio')->nullable();
            $table->date('col_vigencia_fim')->nullable();
            $table->boolean('col_ativo')->default(true);
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_tabelas_tarifarias');
    }
};
