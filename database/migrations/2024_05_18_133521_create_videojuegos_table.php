<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVideojuegosTable extends Migration
{
    public function up()
    {
        Schema::create('videojuegos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('nombre');
            $table->text('descripcion');
            $table->string('genero');
            $table->string('plataforma');
            $table->string('imagen')->nullable();
            $table->timestamps();

            // Definir la relación con la tabla users
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('videojuegos');
    }
}
