<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use App\Fallecido;
use Carbon\Carbon;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new Fallecido([
            'fecha_fall'    => Carbon::createFromFormat('d/m/Y', $row[1])->format('Y-m-d'),
            'edad'          => UsersImport::vacioEdad($row[2]),
            'sexo'          => UsersImport::vacio($row[3]),
            'departamento'  => UsersImport::vacio($row[5]),
            'provincia'     => UsersImport::vacio($row[6]),
            'distrito'      => UsersImport::vacio($row[7]),
            
        ]);
    }

    public function vacio($valor){

        if(is_null($valor)){
            return 'ZNE';
        }else{
            return $valor;
        }
    }

    public function vacioEdad($valor){

        if(is_null($valor)){
            return 0;
        }else{
            return $valor;
        }
    }

  


}
