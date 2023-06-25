<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAvanceMetasTable extends Migration
{
    public function up()
    {
        Schema::create('avance_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_meta');
            $table->string('avance');
            $table->timestamps();

            $table->foreign('id_meta')->references('id')->on('metas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('avance_metas');
    }
}
