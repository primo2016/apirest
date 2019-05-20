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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', ['as' => 'user.index', 'uses' => 'UsuarioController@index']);
Route::get('/create', ['as' => 'user.create', 'uses' => 'UsuarioController@create']);

// Route::get('/payment/{id}', ['as' => 'payment.index', 'uses' => 'PaymentController@index']);

Route::prefix('payment')->group(function ()
{

	Route::get('/{id}', ['as' => 'payment.showByUsuario', 'uses' => 'PaymentController@showByUsuario']);
	Route::get('/create/{id}', ['as' => 'payment.create', 'uses' => 'PaymentController@create']);


	Route::get('/list/{id}/usuario', ['as' => 'payment.index', 'uses' => 'PaymentController@index']);
});