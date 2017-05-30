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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function(){
    return redirect(URL::to('/movie'));
});

Route::get('/movie', 'MovieController@overview');

Route::get('/movie/search', 'MovieController@search');

Route::get('/movie/sort', 'MovieController@sort');

Route::get('/movie/{id}', 'MovieController@detail')->where('id', '[0-9]+');

Route::get('/actors', 'ActorController@overview');

Route::get('/actor/{id}', 'ActorController@detail')->where('id', '[0-9]+');

Route::get('/director/{id}', 'DirectorController@detail')->where('id', '[0-9]+');

