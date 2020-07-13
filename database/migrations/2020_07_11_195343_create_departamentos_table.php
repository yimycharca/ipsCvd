<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departamentos', function (Blueprint $table) {
            $table->id();
            $table->string('DepNom',100);
            $table->integer('DepFalTot');
            //$table->string('DepSexMas');
            $table->integer('DepSexMasTot');
            //$table->string('DepSexFem');
            $table->integer('DepSexFemTot');
            $table->integer('DepSexNesTot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('departamentos');
    }
}
