<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Eventos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo')->default('no disponible');
            $table->string('subtitulo')->default('no disponible');
            $table->text('descripcion');
            $table->SoftDeletes();
            $table->date('fecha')->default('2023-01-01');
            $table->string('imagen')->default('imagen no disponible');
            $table->string('enlace')->default('Enlace no disponible');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Eventos');
    }
}
