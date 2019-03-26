<?php

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

Route::get('/',['as' => 'index','uses' => 'paginas@index']);

Route::get('nav',['as'=>'nav','uses'=>'paginas@nav']);

//Route::resource('Curso','Curso');

//Route::resource('AsignarInstructorCurso','AsignarInstructorCurso');
/*
Route::resource('Instructor','Instructor');

Route::resource('Docente','Docente');

Route::resource('Asistencias','Asistencias');

Route::resource('Incripciones','Inscripciones');

Route::resource('Reportes','Reportes');

Route::resource('Ajustes','Ajustes');*/



Route::resource('curso','CursoController');
//Route::get('curso/create',['as'=>'curso.create','uses'=>'Curso@create']);

/*
Route::get('curso/create',['as'=>'curso.create','uses'=>'Curso@create']);

Route::post('curso',['as'=>'curso.store','uses'=>'Curso@store']);


Route::get('curso',['as'=>'curso.index','uses'=>'Curso@index']);

Route::get('curso/{id}',['as'=>'curso.show','uses'=>'Curso@show']);

Route::get('curso/{id}/edit',['as'=>'curso.edit','uses'=>'Curso@edit']);

Route::put('curso/{id}',['as'=>'curso.update','uses'=>'Curso@update']);

Route::delete('curso/{id}',['as'=>'curso.destroy','uses'=>'Curso@destroy']);
*/