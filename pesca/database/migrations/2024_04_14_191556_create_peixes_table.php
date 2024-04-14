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
        Schema::create('peixes', function (Blueprint $table) {
            $table->id();
            $table->string('nome_comum');
            $table->string('nome_cientifico');
            $table->float('tamanho_minimo_permitido');
            $table->float('peso_minimo_permitido');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peixes');
    }
};
