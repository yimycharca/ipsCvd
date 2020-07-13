<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Distrito;

class DistritoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Distrito::truncate() ;
        // $depa= DB::table('fallecidos')->select('departamento')->distinct();
        $dist=DB::table('fallecidos')
                 ->select('departamento','provincia','distrito', DB::raw('count(*) as total'))
                 ->groupBy('departamento','provincia','distrito');
                 
                    
         foreach($dist->get() as $uni){
             Distrito::create([
                 'DisDepNom' =>$uni->departamento,
                 'DisProNom' => $uni->provincia,
                 'DisNom' =>$uni->distrito,
                 'DisFalTot' => $uni->total,
                 
 
 
             ]);
 
         }



         $masc=DB::table('fallecidos')
         ->select('departamento','provincia','distrito','sexo', DB::raw('count(*) as totalMa'))
         ->where('sexo','masculino')
         ->groupBy('departamento','provincia','distrito');

    
            foreach($masc->get() as $uni){
                // $dep=DB::table('departamentos')->select('nombre');        
                //Departamento::where($uni->departamento,'=','AMAZONAS')->update(array('sexoM' =>$uni->sexo,'totalM' =>$uni->totalMa));
                DB::table('distritos')->where('DisNom',$uni->distrito)->update(['DisSexMasTot' =>$uni->totalMa]);
                    
            }

            $feme=DB::table('fallecidos')
            ->select('departamento','provincia','distrito','sexo', DB::raw('count(*) as totalMa'))
            ->where('sexo','femenino')
            ->groupBy('departamento','provincia','distrito');

                
            foreach($feme->get() as $uni){
                // $dep=DB::table('departamentos')->select('nombre');        
                //Departamento::where($uni->departamento,'=','AMAZONAS')->update(array('sexoM' =>$uni->sexo,'totalM' =>$uni->totalMa));
                DB::table('distritos')->where('DisNom',$uni->distrito)->update(['DisSexFemTot' =>$uni->totalMa]);
                    
            }

            $nes=DB::table('fallecidos')
            ->select('departamento','provincia','distrito','sexo', DB::raw('count(*) as totalMa'))
            ->where('sexo','ZNE')
            ->groupBy('departamento','provincia','distrito');

                
            foreach($nes->get() as $uni){
                // $dep=DB::table('departamentos')->select('nombre');        
                //Departamento::where($uni->departamento,'=','AMAZONAS')->update(array('sexoM' =>$uni->sexo,'totalM' =>$uni->totalMa));
                DB::table('distritos')->where('DisNom',$uni->distrito)->update(['DisSexNesTot' =>$uni->totalMa]);
                    
            }


    }
}
