<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('movimentos', function (Blueprint $table) {
            $table->id('cd_movimento');
            $table->foreignId('cd_conta')->constrained('contas', 'cd_conta');
            $table->date('data');
            $table->decimal('valor', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('movimentos');
    }
};
