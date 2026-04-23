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
        Schema::create('tbl_funcionarios', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_unidade')->nullable()->constrained('tbl_unidades','col_id');
            $table->string('col_nome', 150);
            $table->string('col_cpf', 14)->unique();
            $table->string('col_cargo', 80)->nullable();
            $table->string('col_email', 120)->nullable();
            $table->string('col_telefone', 20)->nullable();
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
        Schema::dropIfExists('tbl_funcionarios');
    }
};
