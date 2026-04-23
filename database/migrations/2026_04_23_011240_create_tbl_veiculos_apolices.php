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
        Schema::create('tbl_veiculos_apolices', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_veiculo')->constrained('tbl_veiculos', 'col_id');
            $table->foreignId('col_id_tbl_apolice_seguro')->constrained('tbl_apolices', 'col_id');
            $table->date('col_data_inicio')->nullable();
            $table->date('col_data_fim')->nullable();
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();
            $table->unique(['col_id_tbl_veiculo', 'col_id_tbl_apolice_seguro', 'col_data_inicio'], 'uk_veiculo_apolice_inicio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_veiculos_apolices');
    }
};
