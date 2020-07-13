<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistritosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distritos', function (Blueprint $table) {
            $table->id();
            $table->string('DisDepNom');
            $table->string('DisProNom');
            $table->string('DisNom');
            $table->integer('DisFalTot');
            //$table->integer('ProFalNesTot');
            $table->integer('DisSexMasTot');
            $table->integer('DisSexFemTot');
            $table->integer('DisSexNesTot');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distritos');
    }
}
