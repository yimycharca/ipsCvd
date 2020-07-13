<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Fecha;

class FechaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Fecha::truncate() ;
        // $depa= DB::table('fallecidos')->select('departamento')->distinct();
        $fecha=DB::table('fallecidos')
                 ->select('fecha_fall', DB::raw('count(*) as total'))
                 ->groupBy('fecha_fall');
                 
                    
         foreach($fecha->get() as $uni){
             Fecha::create([
                 'FecFal' =>$uni->fecha_fall,
                 'FecTotFal' => $uni->total,
              
     
             ]);
 
         }
    }
}
