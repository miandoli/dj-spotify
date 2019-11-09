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

Route::get("/user/add", "UserController@index");
Route::post("/party/create", "PartyController@create");

Route::get ("/", function() {
  return view('welcome');
});
