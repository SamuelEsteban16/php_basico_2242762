<?php

use App\Http\Controllers\MetabuscadorController;
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

Route::get('/', function () {
    return view('welcome');
});

//funcion anonimal o callback

Route::get('variables',function(){
    //definir una variable en php
     $mensaje = 20;
    //funcion var_dump:analizar una variable
    //muestra tipo de dato y valor
    var_dump($mensaje);
    print_r($mensaje);
    echo"<hr />";
    $mensaje = true;
    var_dump($mensaje);
});
Route::get('arreglos',function(){
    //Arreglo: estructuras de datos

    $estudiantes =[
    'AN'=>'Ana',
    'MR'=>'Maria',
    'JO'=>"Jorge"  ];
    echo"<pre>";
    //print_r($estudiantes);
    var_dump($estudiantes);
    echo"</pre>";


});
Route::get("paises",function(){

    $paises= [
    "Colombia"=>[
                 "capital"=>"Bogota",
                 "Moneda"=>"peso",
                 "poblacion"=>51

                ],
    "Peru"=>[
        "capital"=>"Lima",
        "Moneda"=>"sol",
        "poblacion"=>32.8
            ],
    "Paraguay"=>[
        "capital"=>"Asunción",
        "Moneda"=>"Guaraní",
        "poblacion"=>7.3
                ]
            ]
    ;
    return view('paises')->with("naciones",$paises);


});
Route::get("formulario_buscador",'MetabuscadorController@formulario_buscador');




Route::post('buscar', "MetabuscadorController@buscar");


        /*  $suma=0;

      foreach($paises as $nombre => $pais){
       $suma += $pais["poblacion"];

      }

  echo "La suma de los paises es $suma";
    foreach($paises as $nombre => $pais){
             echo"<pre>";
             echo"<h1>$nombre</h1>";
             print_r($pais["capital"]."<br/>");
            print_r($pais["poblacion"]."<br/>");
             print_r($pais["Moneda"]."<br/>");
             echo"</pre>";
             echo"<hr/>";
    }
    echo"<pre>";
    print_r($paises["Paraguay"]["poblacion"]);
    echo"</pre>";
   llamar a una vista
   con datos de paises
   alias nombre con que se reconocen los datos de la vista








*/

