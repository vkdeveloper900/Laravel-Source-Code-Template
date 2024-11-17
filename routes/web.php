<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/', 'website.dashboard')->name('dashboard');

Route::view('alert', 'website.alert')->name('alert');