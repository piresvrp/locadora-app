<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
return new class extends Migration {
    public function up(): void
    {
        Schema::create('tbl_status_veiculos', function (Blueprint $table) {
            $table->id('col_id');
            $table->string('col_nome', 40)->unique();
            $table->boolean('col_permite_locacao')->default(true);
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('tbl_status_veiculos');
    }
};
