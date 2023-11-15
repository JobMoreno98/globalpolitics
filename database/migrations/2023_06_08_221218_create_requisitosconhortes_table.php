<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRequisitosconhortesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisitosconhortes', function (Blueprint $table) {
            $table->id();
            $table->string('generacion')->default('no disponible');
            $table->integer('ingreso')->nullable();
            $table->decimal('tasa',5,2)->nullable();
            $table->decimal('eficiencia',5,2)->nullable();
            $table->SoftDeletes();
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
        Schema::dropIfExists('requisitosconhortes');
    }
}
