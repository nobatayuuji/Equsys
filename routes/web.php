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
    return view('phpinfo');
});
use App\Http\Middleware\LoginCheck;

    //loginã,logout
    Route::get('/login', 'LoginController@index');
    Route::post('/login', 'LoginController@post');
    Route::get('/logout', 'LogoutController@index');
    //Route::post('/logout', 'LogoutController@index');

    Route::get('/form/mainform', 'MainFormController@index')->middleware('logincheck');

    Route::get('/form/equsearch', 'EquSearchController@index')->middleware('logincheck');
    Route::post('/form/equsearch', 'EquSearchController@createlist')->middleware('logincheck');
