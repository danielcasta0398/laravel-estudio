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

Route::get('/', function () {
    echo "<h1>Hola Mundo</h1>";
});

Route::get('/fecha', function () {
    $titulo = 'Estoy mostrando la fecha';
    return view('fecha', array(
        'titulo' => $titulo
    ));
});

Route::get('/pelicula/{titulo?}/{year}', function ($titulo = 'No hay pelicula seleccionada', $year) {
    return view('pelicula', array(
        'titulo' => $titulo,
        'year' => $year
    ));
})->where(array(
    'titulo' => '[a-zA-Z]+',
    'year' => '[0-9]+'
));

Route::get('/listado-peliculas', function(){
    $titulo = "Listado de peliculas";
    $listado = array('Batman', 'Spiderman', 'Gran Torino');

    return view('peliculas.listado')
                ->with('titulo', $titulo)
                ->with('listado', $listado);
});