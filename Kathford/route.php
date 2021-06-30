<?php

use Illuminate\Support\Facades\Route;

Route::get('test', function () {
    return view('admin.index');
});


Route::middleware('web')
    ->prefix('admin')
    ->as('admin.')
    ->namespace('Kathford\Controller\Admin')
    ->group(function () {

        Route::resource('product', 'ProductController');

    });
