<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMetasTable extends Migration
{
    public function up()
    {
        Schema::create('metas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('meta');
            $table->string('duracion');
            $table->unsignedInteger('id_empleado');
            $table->timestamps();

            $table->foreign('id_empleado')->references('id')->on('empleados');
        });
    }

    public function down()
    {
        Schema::dropIfExists('metas');
    }
}
