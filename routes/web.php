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
Route::get('about', function () {
    return view('about');
});

// calling the controller and showuser function in it
//Route::get('user/{user?}','MainPageController@showuser');
Route::get('contact','ContactController@showcontact');
Route::get('blogs','BlogController@index');
Route::get('blog/{id}','BlogController@singleblog');
Route::resource('users','UserController');
Route::resource('roles','RoleController');