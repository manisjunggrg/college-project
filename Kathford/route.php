<?php

use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    return view('admin.index');
});

Route::get('/cache', function (){
    Cache::remember('name', '6000', function () {
        return "Redis is running";
    });
});
Route::middleware('web')
    ->prefix('admin')
    ->as('admin.')
    ->namespace('Kathford\Controller\Admin')
    ->group(function () {

        Route::resource('product', 'ProductController');

    });
