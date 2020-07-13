<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fallecido extends Model
{
    //
    protected $fillable = [
        'id','fecha_fall','edad','sexo','departamento','provincia','distrito'
    ];

    public $timestamps = false;
}
