<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    //
    protected $fillable = [
        'id','DisDepNom','DisProNom','DisNom','DisFalTot','DisSexMasTot','DisSexFemTot','DisSexNesTot'
    ];

    public $timestamps = false;
}
