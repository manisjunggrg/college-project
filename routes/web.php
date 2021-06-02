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
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::get('/profile', function (){return view('profile');});

Route::group(
    ['middleware' => ['auth'],
        'prefix' => 'admin/',
        'as' => 'admin.',
        'namespace' => 'Neputer\\Controller\\Admin\\'],

    function () {
           Route::resource('category','CategoryController');
           Route::get('home',['as'=>'dashboard.index','uses'=>'CategoryController@index']);
           Route::get('home',['as'=>'slider.index','uses'=>'CategoryController@index']);
           Route::get('home',['as'=>'profile','uses'=>'CategoryController@index']);

           /* Hospital Web  Path*/
           Route::resource('hospital','HospitalController');

           /* User Data Web  Path*/
           Route::resource('population','PopulationController');
    });



