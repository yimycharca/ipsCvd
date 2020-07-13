<?php

namespace App\Imports;

use App\Positivo;
use Maatwebsite\Excel\Concerns\ToModel;
use Carbon\Carbon;


class PositivoImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Positivo([
            //
            'departamento'  => PositivoImport::vacio($row[1]),
            'provincia'     => PositivoImport::vacio($row[2]),
            'distrito'      => PositivoImport::vacio($row[3]),
            'metododx'      => PositivoImport::vacio($row[4]),
            'edad'          => PositivoImport::vacioEdad($row[5]),
            'sexo'          =>PositivoImport::vacio($row[6]),
            'fecha_resul'    => Carbon::createFromFormat('d/m/Y', $row[7])->format('Y-m-d'),
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
