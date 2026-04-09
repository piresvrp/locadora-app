<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pagamentos', function (Blueprint $table) {
            $table->id('cd_pagamento');
            $table->foreignId('cd_locacao')->constrained('locacoes', 'cd_locacao');
            $table->foreignId('cd_tipo_pagamento')->constrained('tipo_pagamentos', 'cd_tipo_pagamento');
            $table->date('data');
            $table->boolean('pago')->default(false);
            $table->decimal('valor_locacao', 10, 2);
            $table->decimal('valor_total', 10, 2);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pagamentos');
    }
};
