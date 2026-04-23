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
        Schema::create('tbl_faturamentos_locacoes', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_locacao')->constrained('tbl_locacoes', 'col_id');
            $table->decimal('col_subtotal', 12, 2)->default(0);
            $table->decimal('col_desconto', 12, 2)->default(0);
            $table->decimal('col_acrescimo', 12, 2)->default(0);
            $table->decimal('col_total', 12, 2)->default(0);
            $table->string('col_status_faturamento', 20)->default('aberto');
            $table->dateTime('col_data_fechamento')->nullable();
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_faturamentos_locacoes');
    }
};
