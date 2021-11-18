<?php

use Illuminate\Support\Facades\Route;

Route::get('/admin/dashboard',  function () {
    return view('admin.index');
})->name('dashboard');

Route::resource('category', 'CategoryController');