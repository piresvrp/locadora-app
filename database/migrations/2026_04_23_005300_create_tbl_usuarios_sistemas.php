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
        Schema::create('tbl_usuarios_sistema', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_funcionario')->constrained('tbl_funcionarios','col_id');
            $table->string('col_login', 60)->unique();
            $table->string('col_senha_hash', 255);
            $table->string('col_perfil', 40);
            $table->timestamp('col_ultimo_login')->nullable();
            $table->boolean('col_ativo')->default(true);
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_usuarios_sistema');
    }
};
