<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('montadoras', function (Blueprint $table) {
            $table->id('cd_montadora');
            $table->string('montadora', 100);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('montadoras');
    }
};
