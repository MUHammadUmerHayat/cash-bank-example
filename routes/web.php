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
    return redirect()->action("AccountsController@index");
});


Route::get('/accounts/movement/{id}','AccountsController@movement');
Route::get('/accounts/movements','AccountsController@movements');
Route::post('/accounts/accomplish','AccountsController@accomplish');
Route::post('/reports/historics','AccountsController@historics_reports');

Route::resource('/accounts', 'AccountsController');
