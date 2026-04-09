<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('diarias', function (Blueprint $table) {
            $table->id('cd_diaria');
            $table->foreignId('cd_carro')->constrained('carros', 'cd_carro');
            $table->decimal('valor_diaria', 8, 2);
            $table->decimal('valor_ultrapassar_km', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('diarias');
    }
};
