<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();



Route::get('/', function () {
    return view('index');
    //return view('Peru/mapa');
});

Route::get('index', function () {
    return view('index');
    //return view('Peru/mapa');
})->name('index');

Route::get('mapa', function () {
    return view('Peru/graficaperu');
    //return view('Peru/mapa');
})->name('graficaperu');

Route::get('usuario', function () {
    return view('auth/login');
    //return view('Peru/mapa');
})->name('usuario');

Route::get('grafica', function () {
    return view('graficas/grafica');
    //return view('Peru/mapa');
})->name('grafica');

/* Route::get('tab_fallecidos', function () {
    return view('tablas/tablafallecidos');
    //return view('Peru/mapa');
})->name('tab_fallecidos'); */

Route::get('tab_fallecidos', 'FallecidosController@index' )->name('tab_fallecidos');

Route::get('tab_positivos', function () {
    return view('tablas/tablapositivos');
    //return view('Peru/mapa');
})->name('tab_positivos');


//importar CSV

Route::post('importar','importExcelController@importExcel')->name('usuario.import.excel');
Route::post('importarPositivo','importExcelController@importExcelPositivo')->name('positivo.import.excel');

Route::get('/home', 'UsuarioController@index')->name('home');

/* Route::get('im', function () {
    return view('usuario/interfazUsuario');
   
}); */




