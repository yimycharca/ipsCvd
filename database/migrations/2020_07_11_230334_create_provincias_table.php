<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProvinciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->id();
            $table->string('ProDepNom');
            $table->string('ProNom');
            $table->integer('ProFalTot');
            //$table->integer('ProFalNesTot');
            $table->integer('ProSexMasTot');
            $table->integer('ProSexFemTot');
            $table->integer('ProSexNesTot');
            //->nullable($value = true)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('provincias');
    }
}
