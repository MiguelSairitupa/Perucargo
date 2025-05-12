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
        Schema::create('conductores', function (Blueprint $table) {
            $table->id(); // Clave primaria auto-incremental
            $table->string('nombre'); // Nombre del conductor
            $table->string('licencia')->unique(); // Número de licencia único
            $table->string('telefono')->nullable(); // Teléfono, opcional
            $table->date('fecha_nacimiento'); // Fecha de nacimiento
            $table->timestamps(); // Crea columnas 'created_at' y 'updated_at'
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conductores');
    }
};
