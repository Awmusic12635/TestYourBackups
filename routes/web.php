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

Auth::routes();

Route::get('/app/dasboard', 'HomeController@index');

Route::get('/app/tests', 'TestController@listTests');
Route::get('/app/tests/{testId}', 'TestController@showTest');
Route::get('/app/tests/{testId}/results', 'TestController@showTest');

Route::post('/app/tests', 'TestController@createTest');
Route::post('/app/tests/{testId}', 'TestController@editTest');



