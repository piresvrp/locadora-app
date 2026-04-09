<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cliente_fisicos', function (Blueprint $table) {
            $table->foreignId('cd_cliente')->primary()->constrained('clientes', 'cd_cliente')->onDelete('cascade');
            $table->foreignId('cd_status_detran')->constrained('status_detrans', 'cd_status_detran');
            $table->foreignId('cd_status_spc')->constrained('status_spcs', 'cd_status_spc');
            $table->date('validade_cnh')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cliente_fisicos');
    }
};
