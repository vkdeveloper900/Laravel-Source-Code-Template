<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Website\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [StudentController::class, 'index'])->name('dashboard');
Route::post('remove', [StudentController::class, 'apiDeleteStudent'])->name('apiDeleteStudent');


Route::view('alert', 'website.alert')->name('alert');