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

Route::get('/documents', 'DocumentsController@index');
Route::get('/abad/{district}', 'DocumentsController@abad');
Route::get('/snappytest', 'DocumentsController@snappytest');
Route::get('/test', 'ToolsController@test');
Route::get('/pi', 'ToolsController@pi');

Route::get('/user_admin', 'ToolsController@userAdmin');
Route::post('/user_admin', 'ToolsController@userAdmin');
Route::post('/user_update', 'ToolsController@userUpdate');

Route::get('/homesite_admin', 'ToolsController@homesiteAdmin');
Route::post('/homesite_update', 'ToolsController@homesiteAdmin');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
