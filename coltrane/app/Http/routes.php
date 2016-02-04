<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'uses'  => 'HomeController@index',
    'as'    => 'home_store_path'
]);
Route::get('/estaciones/status/{id}', [
    'uses'  => 'EstacionesController@getStatus',
    'as'    => 'estaciones_status_path'
]);
Route::get('/estaciones', [
    'uses'  => 'EstacionesController@index',
    'as'    => 'estaciones_show_path'
]);

Route::post('/estaciones', [
    'uses'  => 'EstacionesController@store',
    'as'    => 'estaciones_store_path'
]);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
