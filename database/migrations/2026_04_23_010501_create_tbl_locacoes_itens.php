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
        Schema::create('tbl_locacoes_itens', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_locacao')->constrained('tbl_locacoes', 'col_id');
            $table->string('col_tipo_item', 40);
            $table->string('col_descricao', 150);
            $table->decimal('col_quantidade', 10, 2)->default(1);
            $table->decimal('col_valor_unitario', 12, 2)->default(0);
            $table->decimal('col_valor_total', 12, 2)->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_locacoes_itens');
    }
};
