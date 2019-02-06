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

Route::pattern('id', '\d+');
Route::pattern('hex', '[a-f0-9]+');

Route::get('/', 'PostController@index');

Route::any('bienvenida', function () {
    $url = url('bienvenida');
    return "Esta es la url: $url";
});

Route::get('post/{id}', [
    'uses' => 'PostController@show'
]);

Route::post('post/store', [
    'middleware' => 'auth',
    'before' => 'csrf',
    'uses' => 'PostController@store'
]);

Route::post('post/update/{id}', [
    'middleware' => 'auth',
    'before' => 'csrf',
    'uses' => 'PostController@update'
]);

Route::get('post/delete/{id}', [
    'uses' => 'PostController@destroy'
]);

