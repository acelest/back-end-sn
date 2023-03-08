<?php

use Illuminate\Support\Facades\Route;

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

///Ajouter un parent 
Route::post('/parents', 'ParentController@store');

//modifier un parent
Route::put('/parents/{id}', 'ParentController@update');

//supprimer un parent
Route::delete('/parents/{id}', 'ParentController@destroy');

//recuperer tous les eleves 

Route::get('/eleves', 'EleveController@index');

//recuperer les details 

Route::get('/eleves/{id}', 'EleveController@show');

//recuperer les eleves d'une classe en particulier

Route::get('/classes/{id}/eleves', 'ClasseController@eleves');