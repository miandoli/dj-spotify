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
    return view('home');
});

Route::get('/join', function () {
    return view('join');
});

Route::get('/host', "UserController@index");

Route::get("/host/{code}", function() {
  return view('host');
});

Route::get("/party/{code}", "PartyController@index");


Route::get('/party', function () {
    return view('party');
});

Route::post("/", function() {
  return view('welcome');
});

Route::get('/callback', "UserController@create");

Route::post("/search", "SearchController@search");

Route::post('/host/access', "UserController@access");
