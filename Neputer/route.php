
<?php

use Illuminate\Support\Facades\Route;


Route::group([

    'middleware'=>'web',

],function (){
         Route::resources([
             'test' => 'App\Http\Controllers\TestController',
         ]);
         Route::get('/sample',['as'=>'sample', 'uses'=>'App\Http\Controllers\TestController@sample']);
         Route::get('/sample/search',['as'=>'sample.search', 'uses'=>'App\Http\Controllers\TestController@search']);
         Route::post('/sample/post',['as'=>'sample.post','uses'=>'App\Http\Controllers\TestController@store']);
});
