<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('saldos', function (Blueprint $table) {
            $table->id();
            $table->date('data')->unique();
            $table->decimal('total_debito', 10, 2)->default(0);
            $table->decimal('total_credito', 10, 2)->default(0);
            $table->decimal('saldo', 10, 2)->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('saldos');
    }
};
