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
        Schema::create('lloga', function (Blueprint $table) {
            $table->string('Dni_client');
            $table->string('Matricula_auto');
            $table->date('Data_prestec');
            $table->date('Data_devolucio');
            $table->string('Lloc_devolucio');
            $table->float('Preu_per_dia');
            $table->enum('Prestec_amb_retorn_deposit_ple', ['sí', 'no']);
            $table->enum('Tipus_assegurança', ['Franquícia fins a 1000 Euros', 'Franquíca fins 500 Euros', 'Sense franquícia']);
            $table->timestamps();

            $table->primary(['Dni_client', 'Matricula_auto']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lloga');
    }
};
