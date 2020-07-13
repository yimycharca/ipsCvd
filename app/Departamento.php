<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Departamento extends Model
{
    //
    protected $fillable = [
        'id','DepNom','DepFalTot','DepSexMasTot','DepSexFemTot','DepSexNesTot'
    ];

    public $timestamps = false;
}
