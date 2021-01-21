<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('register','Api\Auth\AuthController@register');
Route::post('login','Api\Auth\AuthController@login');

Route::group(['prefix' => 'pengajuan'], function () {
    Route::group(['middleware' => 'auth:api'], function () {
        Route::get('get', 'Api\PengajuanController@get');
        Route::post('tambah', 'Api\PengajuanController@store');
        Route::put('update/{id}', 'Api\PengajuanController@update');
        Route::delete('delete/{id}', 'Api\PengajuanController@destroy');

    });
});


// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
