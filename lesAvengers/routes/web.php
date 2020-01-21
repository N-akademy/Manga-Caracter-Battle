
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
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index');


Route::get('/showGame','GamerController@showGame')->name('showGame');
Route::get('/showGamers','GamerController@show')->name('showGamers');


 

ROUTE::group(['middleware'=>['auth']], function(){

    
    Route::get('/createOne', 'TeamController@createTeam')->name('createTeam');
    ROUTE::post('/store', 'TeamController@store')->name('store');
    ROUTE::post('/edit/{id}', 'TeamController@edit')->name('edit');
    ROUTE::post('/updateGamer/{id}', 'TeamController@update')->name('update');
    ROUTE::post('/deleteGamer/{id}', 'TeamController@delete')->name('delete');


    Route::get('/createOne', 'GamerController@createGamer')->name('createGamer');
    ROUTE::post('/store', 'GamerController@storeGamer')->name('storeGamer');
    ROUTE::post('/edit/{id}', 'GamerController@editGamer')->name('edit');
    ROUTE::post('/updateGamer/{id}', 'GamerController@updateGamer')->name('updateGamer');
    ROUTE::post('/deleteGamer/{id}', 'GamerController@deleteGamer')->name('deleteGamer');














    Route::get('/showUsers','UserController@show')->name('show');
    Route::get('/getSingup', 'UserController@getSingup')->name('getSignup');
    ROUTE::post('/postSingup', 'UserController@postSingup')->name('postSignup');

    ROUTE::post('/storeUser/{id}', 'UserController@store')->name('storeUser');
    ROUTE::post('/updateUser/{id}', 'UserController@update')->name('updateUser');
    ROUTE::post('/deleteUser/{id}', 'UserController@destroy')->name('deleteUser');

    
    Route::get('/createGame', 'GamerController@createGame')->name('createGame');
    ROUTE::post('/storeGame', 'GamerController@storeGame')->name('storeGame');
    
});







