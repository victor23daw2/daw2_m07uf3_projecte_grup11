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
        Schema::create('clients', function (Blueprint $table) {
            $table->string('Dni_client')->primary();
            $table->string('Nom_i_cognoms');
            $table->integer('Edat');
            $table->string('Telefon');
            $table->string('Adreca');
            $table->string('Ciutat');
            $table->string('Pais');
            $table->string('Email');
            $table->string('Numero_permis_conduccio');
            $table->integer('Punts_permis_conduccio');
            $table->enum('Tipus_targeta', ['Dèbit', 'Crèdit']);
            $table->string('Numero_targeta');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
