<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

//Cursos
Route::get("cursos", "CursosController@index");
Route::get("cursos/{id}", "CursosController@show");
Route::post("cursos", "CursosController@store");
Route::put("cursos/{id}", "CursosController@update");
Route::delete("cursos/{id}", "CursosController@destroy");

//Materias
Route::get("materias", "MateriasController@index");
Route::get("materias/{id}", "MateriasController@show");
Route::post("materias", "MateriasController@store");
Route::put("materias/{id}", "MateriasController@update");
Route::delete("materias/{id}", "MateriasController@destroy");

//MateriasXCursos
Route::get("matxcur", "MateriasxCursosController@index");
Route::get("matxcur/{id}", "MateriasxCursosController@show");
Route::post("matxcur", "MateriasxCursosController@store");
Route::put("matxcur/{id}", "MateriasxCursosController@update");
Route::delete("matxcur/{id}", "MateriasxCursosontroller@destroy");



