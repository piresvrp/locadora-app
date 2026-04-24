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
        Schema::create('tbl_movimentos_caixa', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_unidade')->nullable()->constrained('tbl_unidades', 'col_id');
            $table->string('col_tipo_movimento', 20);
            $table->string('col_origem', 40)->nullable();
            $table->unsignedBigInteger('col_referencia_id')->nullable();
            $table->dateTime('col_data_movimento');
            $table->decimal('col_valor', 12, 2);
            $table->string('col_descricao', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_movimentos_caixa');
    }
};
