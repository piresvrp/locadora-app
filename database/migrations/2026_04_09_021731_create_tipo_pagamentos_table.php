<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('tipo_pagamentos', function (Blueprint $table) {
            $table->id('cd_tipo_pagamento');
            $table->string('tipo_pagamento', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('tipo_pagamentos');
    }
};
