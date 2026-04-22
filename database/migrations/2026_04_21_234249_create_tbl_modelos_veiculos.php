<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void
    {
        Schema::create('tbl_modelos_veiculos', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_marca')->constrained('tbl_marcas', 'col_id');
            $table->foreignId('col_id_tbl_categoria_veiculo')->constrained('tbl_categorias_veiculos', 'col_id');
            $table->string('col_nome', 80);
            $table->string('col_versao', 80)->nullable();
            $table->unsignedSmallInteger('col_ano_modelo')->nullable();
            $table->unsignedSmallInteger('col_ano_fabricacao')->nullable();
            $table->string('col_combustivel', 30)->nullable();
            $table->string('col_cambio', 20)->nullable();
            $table->boolean('col_ativo')->default(true);
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tbl_modelos_veiculos');
    }
};
