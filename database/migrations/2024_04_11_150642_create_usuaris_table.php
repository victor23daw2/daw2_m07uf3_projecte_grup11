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
        Schema::create('usuaris', function (Blueprint $table) {
            $table->id();
            $table->string('Nom_i_cognoms');
            $table->string('Email')->unique();
            $table->string('Contrasenya');
            $table->enum('Tipus', ['treballador', 'cap_de_departament']);
            $table->timestamp('Darrera_hora_entrada')->nullable();
            $table->timestamp('Darrera_hora_sortida')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuaris');
    }
};
