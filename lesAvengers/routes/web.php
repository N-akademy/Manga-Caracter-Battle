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

Route::get('/user', 'UserController@index');

Route::get('/gamers.show', 'GamerController@index');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/showGamers','GamerController@show')->name('showGamers');
ROUTE::group(['middleware'=>['auth']], function(){
    Route::get('/createGamer', 'GamerController@create')->name('createGamer');
    ROUTE::post('/storeGamer', 'GamerController@store')->name('storeGamer');
    ROUTE::post('/editGamer/{id}', 'GamerController@edit')->name('editGamer');
    ROUTE::post('/updateGamer/{id}', 'GamerController@update')->name('updateGamer');
    ROUTE::post('/deleteGamer/{id}', 'GamerController@destroy')->name('deleteGamer');

    //Route::get('/showRaces','RaceController@show')->name('showRaces');
    //Route::get('/createRace', 'RaceController@create')->name('createRace');
    //ROUTE::post('/storeRace', 'RaceController@store')->name('storeRace');
    //ROUTE::post('/editRace/{id}', 'RaceController@edit')->name('editRace');
    //ROUTE::post('/updateRace/{id}', 'RaceController@update')->name('updateRace');
    //ROUTE::post('/deleteRace/{id}', 'RaceController@destroy')->name('deleteRace');
});
