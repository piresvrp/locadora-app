<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('preco_litro_combustiveis', function (Blueprint $table) {
            $table->id();
            $table->decimal('preco', 8, 3);
            $table->date('vigencia');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('preco_litro_combustiveis');
    }
};
