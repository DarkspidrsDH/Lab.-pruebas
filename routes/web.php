<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/mother', function () {
    return view('mother');
});

Route::get('/home', function () {
    return view('home');
});

/*
    ||========================
    || LABORATORIO DE PRUEBAS
    ||========================
*/




Route::get('/publicaciones', 'PublicacionController@index');


Route::get('/public',function(){
    $respuesta = \App\Models\Publicacion::orderBy('id','asc')->get();
    return response()->json($respuesta);
});

Route::post('/public',function(Request $request){
    $respuesta = new \App\Models\Publicacion;
    $respuesta['text'] = $request['text'];
    $respuesta->save();
    if ($respuesta) {
        return response()->json(['estado'=>'200','respuesta'=>$respuesta]);
    }else{
        return response()->json(['estado'=>'error']);
    }
    //return response()->json($respuesta);
});

Route::get('/pruebas',function(){
    $respuesta = \App\Models\Pruebas::orderBy('id','asc')->get();
    return response()->json($respuesta);
});