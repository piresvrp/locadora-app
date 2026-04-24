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
        Schema::create('tbl_anexos', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_usuario')->nullable()->constrained('tbl_usuarios_sistema','col_id');
            $table->string('col_entidade', 40);
            $table->unsignedBigInteger('col_id_registro');
            $table->string('col_nome_arquivo', 150);
            $table->string('col_tipo_arquivo', 50)->nullable();
            $table->string('col_url_arquivo', 255);
            $table->dateTime('col_enviado_em')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_anexos');
    }
};
