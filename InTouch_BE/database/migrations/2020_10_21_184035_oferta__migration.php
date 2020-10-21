<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class OfertaMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oferta', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_videojuego_ofertado');
            $table->foreignId('id_videojuego_demandado');
            $table->date('fecha_creacion');
            $table->date('fecha_modificacion');
            $table->string('estatus_oferta');
            $table->string('modalidad_oferta');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oferta');
    }
}
