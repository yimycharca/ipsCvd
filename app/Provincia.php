<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    //
    protected $fillable = [
        'id','ProDepNom','ProNom','ProFalTot','ProSexMasTot','ProSexFemTot','ProSexNesTot'
    ];

    public $timestamps = false;
}
