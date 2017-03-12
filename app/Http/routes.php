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

Route::resource('/', 'ClientController@index');

Route::resource('client', 'ClientController@index');
Route::post('client/create', 'ClientController@store');
Route::get('client/{id}','ClientController@show');
Route::get('client/{id}/edit','ClientController@edit');

Route::resource('project', 'ProjectController@index');
Route::post('project/create', 'ProjectController@store');
Route::get('project/{id}','ProjectController@show');
Route::get('project/{id}/edit','ProjectController@edit');

Route::resource('devis', 'DevisController@index');
Route::post('devis/create', 'DevisController@store');
Route::get('devis/{id}','DevisController@show');
Route::get('devis/{id}/edit','DevisController@edit');

