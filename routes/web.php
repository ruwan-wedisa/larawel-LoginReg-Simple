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


Route::get('/',['uses'=>'UserController@loginPage','as'=>'login']);
Route::get('home',['uses'=>'UserController@getHome','as'=>'home'])->middleware('auth');
Route::get('logout',['uses'=>'UserController@logOut','as'=>'logout']);

Route::post('register',['uses'=>'UserController@RegisterUser','as'=>'signup']);
Route::post('login',['uses'=>'UserController@LoginUser','as'=>'signin']);
