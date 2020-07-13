<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Positivo extends Model
{
    //
    protected $fillable = [
        'id','departamento','provincia','distrito','metododx','edad','sexo','fecha_resul'
    ];

    public $timestamps = false;
}
