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
        Schema::create('tbl_locacoes_condutores', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_locacao')->constrained('tbl_locacoes', 'col_id');
            $table->foreignId('col_id_tbl_condutor_adicional')->constrained('tbl_condutores_adicionais', 'col_id');
            $table->boolean('col_principal')->default(false);
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();
            $table->unique(['col_id_tbl_locacao', 'col_id_tbl_condutor_adicional'], 'uk_locacao_condutor');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_locacoes_condutores');
    }
};
