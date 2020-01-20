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
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/user', 'UserController@index');




Route::get('/showGamers','GamerController@show')->name('showGamers');

Route::get('/showUsers','GamerController@show')->name('showGamers');

ROUTE::group(['middleware'=>['auth']], function(){
    Route::get('/createGamer', 'GamerController@create')->name('createGamer');
    ROUTE::post('/storeGamer', 'GamerController@store')->name('storeGamer');
    ROUTE::post('/editGamer/{id}', 'GamerController@edit')->name('editGamer');
    ROUTE::post('/updateGamer/{id}', 'GamerController@update')->name('updateGamer');
    ROUTE::post('/deleteGamer/{id}', 'GamerController@destroy')->name('deleteGamer');

    Route::get('/getSingup', 'UserController@create')->name('storeLogin');
    ROUTE::post('/postSingup', 'UserController@store')->name('postLogin');
    ROUTE::post('/storeUser/{id}', 'UserController@store')->name('storeUser');
    ROUTE::post('/updateUser/{id}', 'UserController@update')->name('updateUser');
    ROUTE::post('/deleteUser/{id}', 'UserController@destroy')->name('deleteUser');

    Route::get('/showGame','GameController@show')->name('showGame');
   
    ROUTE::post('/storeGame', 'GameController@store')->name('storeGame');
    
});
