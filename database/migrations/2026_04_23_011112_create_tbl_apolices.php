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
        Schema::create('tbl_apolices', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_seguradora')->constrained('tbl_seguradoras','col_id');
            $table->foreignId('col_id_tbl_tipo_seguro')->constrained('tbl_tipos_seguros','col_id');
            $table->string('col_numero_apolice', 50)->unique();
            $table->decimal('col_franquia_valor', 12, 2)->nullable();
            $table->date('col_data_inicio')->nullable();
            $table->date('col_data_fim')->nullable();
            $table->decimal('col_valor_premio', 12, 2)->nullable();
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
        Schema::dropIfExists('tbl_apolices');
    }
};
