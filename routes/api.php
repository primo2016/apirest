<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/user/addUser', 'UsuarioController@store');
Route::get('/user/getUser', 'UsuarioController@index');
Route::get('/user/getAllUser', 'UsuarioController@getAllUser');
Route::delete('/user/deleteUser/{usuario}', 'UsuarioController@destroy');

Route::prefix('payment')->group(function ()
{
	Route::delete('/deletePayment/{payment}', 'PaymentController@destroy');
	Route::post('/addPayment', 'PaymentController@store');
	Route::get('/getPayment', 'PaymentController@index');
	Route::get('/getPaymentByIdUser/{id}', 'PaymentController@showByUsuarioApi');
});