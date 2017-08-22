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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/partida/','PartidaController@index')->name('partida_index');
Route::get('/partida/{partida}/show','PartidaController@show')->name('partida_show');
Route::get('/partida/create','PartidaController@create')->name('partida_create');
Route::post('/partida/create','PartidaController@store')->name('partida_store');
Route::get('/partida/{partida}/edit','PartidaController@edit')->name('partida_edit');
Route::post('/partida/{partida}/edit','PartidaController@update')->name('partida_update');
Route::get('/partida/{partida}/destroy','PartidaController@destroy')->name('partida_destroy');


Route::get('/budgetCode/','BudgetCodeController@index')->name('budgetCode_index');
Route::get('/budgetCode/{budgetCode}/show','BudgetCodeController@show')->name('budgetCode_show');
Route::get('/budgetCode/create','BudgetCodeController@create')->name('budgetCode_create');
Route::post('/budgetCode/create','BudgetCodeController@store')->name('budgetCode_store');
Route::get('/budgetCode/{budgetCode}/edit','BudgetCodeController@edit')->name('budgetCode_edit');
Route::post('/budgetCode/{budgetCode}/edit','BudgetCodeController@update')->name('budgetCode_update');
Route::get('/budgetCode/{budgetCode}/destroy','BudgetCodeController@destroy')->name('budgetCode_destroy');