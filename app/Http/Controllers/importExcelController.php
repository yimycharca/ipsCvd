<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UsersImport;
use App\Imports\PositivoImport;
use App\Fallecido;
use App\Positivo;
use Carbon\Carbon;

class importExcelController extends Controller
{
   
    public function importExcel(Request $request){
        Fallecido::truncate() ;
        $file =$request->file('file');
        Excel::import(new UsersImport, $file);

        return back()->with ('message1','Datos subidos exitosamente: Fallecidos');
    }

    public function importExcelPositivo(Request $request){
        Positivo::truncate() ;
        $file =$request->file('file');
        Excel::import(new PositivoImport, $file);

        return back()->with ('message2','Datos subidos exitosamente: Positivos');
    }

    
}
