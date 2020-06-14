<?php

use Illuminate\Support\Facades\Route;

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


// Route::get('/roles',function(){
//     return App\Role::with('user')->get();
// });

Route::get('/','HomeController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/camaras','CamerasController');
Route::resource('/usuarios','UsersController');
Route::resource('/cajas','DrawersController');
Route::resource('/estados','StatusController');
Route::resource('/centrodecomando','CcommandController');