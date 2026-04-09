<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('status_spcs', function (Blueprint $table) {
            $table->id('cd_status_spc');
            $table->string('valor_spc', 50);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('status_spcs');
    }
};
