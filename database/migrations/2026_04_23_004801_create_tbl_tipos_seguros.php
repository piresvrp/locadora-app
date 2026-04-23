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
        Schema::create('tbl_tipos_seguros', function (Blueprint $table) {
            $table->id('col_id');
            $table->string('col_nome', 60);
            $table->string('col_descricao', 255)->nullable();
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
        Schema::dropIfExists('tbl_tipos_seguros');
    }
};
