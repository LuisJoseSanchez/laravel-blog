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

Route::get('/', function () {
    return view('welcome');
});

Route::any('bienvenida', function () {
    $url = url('bienvenida');
    return "Esta es la url: $url";
});

Route::get('post/{id}', [
    'uses' => 'PostController@show'
]);

Route::post('post/store', [
    'middleware' => ['auth', 'age'],
    'uses' => 'PostController@store'
]);

