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
        Schema::create('tbl_impostos_taxas', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_veiculo')->constrained('tbl_veiculos', 'col_id');
            $table->string('col_tipo', 40);
            $table->string('col_competencia', 20)->nullable();
            $table->date('col_vencimento')->nullable();
            $table->decimal('col_valor', 12, 2)->nullable();
            $table->string('col_status_pagamento', 20)->nullable();
            $table->date('col_data_pagamento')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_impostos_taxas');
    }
};
