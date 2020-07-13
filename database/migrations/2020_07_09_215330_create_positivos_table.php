<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePositivosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('positivos', function (Blueprint $table) {
            $table->id();
            $table->string('departamento',150);
            $table->string('provincia',150);
            $table->string('distrito',150);
            $table->string('metododx',10);
            $table->integer('edad');
            $table->string('sexo',20);
            $table->date('fecha_resul');
           
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('positivos');
    }
}
