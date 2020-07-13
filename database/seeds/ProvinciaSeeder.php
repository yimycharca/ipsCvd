<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Provincia;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        Provincia::truncate() ;
        // $depa= DB::table('fallecidos')->select('departamento')->distinct();
        $provin=DB::table('fallecidos')
                 ->select('departamento','provincia', DB::raw('count(*) as total'))
                 ->groupBy('departamento','provincia');
                 
                    
         foreach($provin->get() as $uni){
             Provincia::create([
                 'ProDepNom' =>$uni->departamento,
                 'ProNom' =>$uni->provincia,
                 'ProFalTot' => $uni->total,
 
 
             ]);
 
         }



         $masc=DB::table('fallecidos')
         ->select('departamento','provincia','sexo', DB::raw('count(*) as totalMa'))
         ->where('sexo','masculino')
         ->groupBy('departamento','provincia');

    
            foreach($masc->get() as $uni){
                // $dep=DB::table('departamentos')->select('nombre');        
                //Departamento::where($uni->departamento,'=','AMAZONAS')->update(array('sexoM' =>$uni->sexo,'totalM' =>$uni->totalMa));
                DB::table('provincias')->where('ProNom',$uni->provincia)->update(['ProSexMasTot' =>$uni->totalMa]);
                    
            }

            $feme=DB::table('fallecidos')
            ->select('departamento','provincia','sexo', DB::raw('count(*) as totalMa'))
            ->where('sexo','femenino')
            ->groupBy('departamento','provincia');

                
            foreach($feme->get() as $uni){
                // $dep=DB::table('departamentos')->select('nombre');        
                //Departamento::where($uni->departamento,'=','AMAZONAS')->update(array('sexoM' =>$uni->sexo,'totalM' =>$uni->totalMa));
                DB::table('provincias')->where('ProNom',$uni->provincia)->update(['ProSexFemTot' =>$uni->totalMa]);
                    
            }

            $nes=DB::table('fallecidos')
            ->select('departamento','provincia','sexo', DB::raw('count(*) as totalMa'))
            ->where('sexo','ZNE')
            ->groupBy('departamento','provincia');

                
            foreach($nes->get() as $uni){
                // $dep=DB::table('departamentos')->select('nombre');        
                //Departamento::where($uni->departamento,'=','AMAZONAS')->update(array('sexoM' =>$uni->sexo,'totalM' =>$uni->totalMa));
                DB::table('provincias')->where('ProNom',$uni->provincia)->update(['ProSexNesTot' =>$uni->totalMa]);
                    
            }
            
    }
}