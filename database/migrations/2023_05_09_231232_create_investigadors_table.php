<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvestigadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Investigadores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre')->default('no disponible');
            $table->string('especialidad')->default('no disponible');
            $table->string('correo')->default('no disponible');
            $table->SoftDeletes();
            $table->string('puesto');
            $table->text('biografia');
            $table->text('linea');
            $table->text('proyectos');
            $table->text('publicaciones');
            $table->text('descripcion');
            $table->string('orientacion')->default('no disponible');
            $table->string('imagen');

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
        Schema::dropIfExists('Investigadores');
    }
}
