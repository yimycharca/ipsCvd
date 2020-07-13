<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Departamento;

class DepartamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Departamento::truncate() ;
       // $depa= DB::table('fallecidos')->select('departamento')->distinct();
       $depa=DB::table('fallecidos')
                ->select('departamento', DB::raw('count(*) as total'))
                ->groupBy('departamento');
                
                   
        foreach($depa->get() as $uni){
            Departamento::create([
                'DepNom' =>$uni->departamento,
                'DepFalTot' => $uni->total


            ]);
        }

       
        $masc=DB::table('fallecidos')
                ->select('departamento','sexo', DB::raw('count(*) as totalMa'))
                ->where('sexo','masculino')
                ->groupBy('departamento');

           
        foreach($masc->get() as $uni){
           // $dep=DB::table('departamentos')->select('nombre');        
            //Departamento::where($uni->departamento,'=','AMAZONAS')->update(array('sexoM' =>$uni->sexo,'totalM' =>$uni->totalMa));
            DB::table('departamentos')->where('DepNom',$uni->departamento)->update(['DepSexMasTot' =>$uni->totalMa]);
                
        }

        $feme=DB::table('fallecidos')
                ->select('departamento','sexo', DB::raw('count(*) as totalMa'))
                ->where('sexo','femenino')
                ->groupBy('departamento');

           
        foreach($feme->get() as $uni){
           // $dep=DB::table('departamentos')->select('nombre');        
            //Departamento::where($uni->departamento,'=','AMAZONAS')->update(array('sexoM' =>$uni->sexo,'totalM' =>$uni->totalMa));
            DB::table('departamentos')->where('DepNom',$uni->departamento)->update(['DepSexFemTot' =>$uni->totalMa]);
                
        }

        $nes=DB::table('fallecidos')
                ->select('departamento','sexo', DB::raw('count(*) as totalMa'))
                ->where('sexo','ZNE')
                ->groupBy('departamento');

           
        foreach($nes->get() as $uni){
           // $dep=DB::table('departamentos')->select('nombre');        
            //Departamento::where($uni->departamento,'=','AMAZONAS')->update(array('sexoM' =>$uni->sexo,'totalM' =>$uni->totalMa));
            DB::table('departamentos')->where('DepNom',$uni->departamento)->update(['DepSexNesTot' =>$uni->totalMa]);
                
        }


                   
        
               
            
      
    }
}