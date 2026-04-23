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
        Schema::create('tbl_danos', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_vistoria')->constrained('tbl_vistorias', 'col_id');
            $table->foreignId('col_id_tbl_tipo_dano')->constrained('tbl_tipos_danos', 'col_id');
            $table->string('col_local_dano', 100)->nullable();
            $table->string('col_descricao', 255)->nullable();
            $table->decimal('col_valor_estimado', 12, 2)->nullable();
            $table->string('col_responsavel_cobranca', 20)->nullable();
            $table->string('col_status_dano', 30)->nullable();
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_danos');
    }
};
