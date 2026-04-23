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
        Schema::create('tbl_vistorias', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_locacao')->nullable()->constrained('tbl_locacoes','col_id');
            $table->foreignId('col_id_tbl_veiculo')->constrained('tbl_veiculos', 'col_id');
            $table->foreignId('col_id_tbl_funcionario')->nullable()->constrained('tbl_funcionarios', 'col_id');
            $table->string('col_tipo_vistoria', 20);
            $table->dateTime('col_data_hora_vistoria');
            $table->decimal('col_km_veiculo', 10, 1)->nullable();
            $table->decimal('col_combustivel_percentual', 5, 2)->nullable();
            $table->longText('col_fotos_json')->nullable();
            $table->text('col_observacoes')->nullable();
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_vistorias');
    }
};
