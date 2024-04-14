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
        Schema::create('capturas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pescaria');
            $table->unsignedBigInteger('id_peixe');
            $table->unsignedBigInteger('id_isca');
            $table->float('tamanho');
            $table->float('peso');
            $table->string('solto');
            $table->string('descricao_soltura');
            $table->timestamps();

            $table->foreign('id_pescaria')->references('id')->on('pescarias')->onDelete('restrict');
            $table->foreign('id_peixe')->references('id')->on('peixes')->onDelete('restrict');
            $table->foreign('id_isca')->references('id')->on('iscas')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capturas');
    }
};
