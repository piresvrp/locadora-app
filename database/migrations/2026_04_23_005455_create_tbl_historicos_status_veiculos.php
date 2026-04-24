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
        Schema::create('tbl_historicos_status_veiculos', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_veiculo')->constrained('tbl_veiculos', 'col_id');
            $table->foreignId('col_id_tbl_status_veiculo')->constrained('tbl_status_veiculos', 'col_id');
            $table->foreignId('col_id_tbl_usuario')->nullable()->constrained('tbl_usuarios_sistema', 'col_id');
            $table->timestamp('col_data_inicio');
            $table->timestamp('col_data_fim')->nullable();
            $table->string('col_motivo', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_historicos_status_veiculos');
    }
};
