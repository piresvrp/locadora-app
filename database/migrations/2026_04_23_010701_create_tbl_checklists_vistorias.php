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
        Schema::create('tbl_checklists_vistorias', function (Blueprint $table) {
            $table->id('col_id');
            $table->foreignId('col_id_tbl_vistoria')->constrained('tbl_vistorias', 'col_id');
            $table->string('col_item', 80);
            $table->string('col_situacao', 30)->nullable();
            $table->string('col_observacao', 255)->nullable();
            $table->timestamp('col_created_at')->nullable();
            $table->timestamp('col_updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_checklists_vistorias');
    }
};
