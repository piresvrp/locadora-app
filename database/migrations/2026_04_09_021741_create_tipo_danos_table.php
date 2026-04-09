<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tipo_danos', function (Blueprint $table) {
            $table->id('cd_tipo_dano');
            $table->string('tipo_danos', 100);
            $table->string('tipo', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tipo_danos');
    }
};
