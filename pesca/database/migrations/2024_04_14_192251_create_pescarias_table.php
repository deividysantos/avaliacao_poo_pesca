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
        Schema::create('pescarias', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->unsignedBigInteger('id_local');
            $table->unsignedBigInteger('id_pescador');
            $table->date('data');

            $table->foreign('id_local')->references('id')->on('locais')->onDelete('restrict');
            $table->foreign('id_pescador')->references('id')->on('pescadores')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pescarias');
    }
};
