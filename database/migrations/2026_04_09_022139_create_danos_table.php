<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('danos', function (Blueprint $table) {
            $table->id('cd_danos');
            $table->foreignId('cd_avaliacao')->constrained('avaliacoes', 'cd_avaliacao')->onDelete('cascade');
            $table->foreignId('cd_tipo_dano')->constrained('tipo_danos', 'cd_tipo_dano');
            $table->string('descricao', 255)->nullable();
            $table->decimal('valor_dano', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('danos');
    }
};
