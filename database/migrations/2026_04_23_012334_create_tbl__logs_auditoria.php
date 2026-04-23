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
        Schema::create('tbl__logs_auditoria', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_usuario')->nullable()->constrained('tbl_usuarios_sistema','col_id');
            $table->string('col_entidade', 40);
            $table->unsignedBigInteger('col_id_registro')->nullable();
            $table->string('col_acao', 20);
            $table->longText('col_dados_anteriores')->nullable();
            $table->longText('col_dados_novos')->nullable();
            $table->dateTime('col_realizado_em');
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl__logs_auditoria');
    }
};
