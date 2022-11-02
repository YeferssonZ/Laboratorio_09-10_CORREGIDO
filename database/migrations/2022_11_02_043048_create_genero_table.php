<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genero', function (Blueprint $table) {
            $table->id();         
            $table->string('nombre');
            $table->string('artista');
            $table->unsignedBigInteger('canciones_id');
            $table->foreign('canciones_id')->references('id')->on('canciones');
            $table->date('año_lanzamiento');
            $table->string('tipo_genero');
            });
    }    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canciones');
    }
};