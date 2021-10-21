<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorialMembresiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historial_membresias', function (Blueprint $table) {
            $table->id();
            $table->integer('id_plan');
            $table->string('codigo_plan')->nullable();
            $table->integer('monto');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('id_usuario');
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
        Schema::dropIfExists('historial_membresias');
    }
}
