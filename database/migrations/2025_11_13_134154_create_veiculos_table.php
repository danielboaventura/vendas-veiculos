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
        Schema::create('veiculos', function (Blueprint $table) {
            $table->id();
            $table->foreignId('marca_id')->constrained('marcas')->onDelete('restrict');
            $table->foreignId('modelo_id')->constrained('modelos')->onDelete('restrict');
            $table->foreignId('cor_id')->constrained('cores')->onDelete('restrict');
            $table->year('ano');
            $table->unsignedInteger('quilometragem');
            $table->decimal('valor', 12, 2);
            $table->text('detalhes')->nullable();
            $table->string('foto_principal')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('veiculos');
    }
};
