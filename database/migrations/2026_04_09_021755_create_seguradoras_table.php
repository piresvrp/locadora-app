<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('seguradoras', function (Blueprint $table) {
            $table->id('cd_seguradora');
            $table->string('razao_social', 150);
            $table->string('base', 100)->nullable();
            $table->string('endereco', 200)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('estado', 2)->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('seguradoras');
    }
};
