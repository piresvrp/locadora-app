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
        Schema::create('tbl_pagamentos', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_faturamento_locacao')->constrained('tbl_faturamentos_locacoes', 'col_id');
            $table->foreignId('col_id_tbl_tipo_pagamento')->constrained('tbl_tipos_pagamentos','col_id');
            $table->dateTime('col_data_pagamento')->nullable();
            $table->decimal('col_valor', 12, 2)->default(0);
            $table->string('col_status_pagamento', 20)->default('pendente');
            $table->string('col_codigo_transacao', 80)->nullable();
            $table->string('col_observacoes', 255)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_pagamentos');
    }
};
