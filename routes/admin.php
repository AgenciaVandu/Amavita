<?php

use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
});


Route::get('/index', IndexController::class)->name('admin.index');
Route::get('/galeries', GaleryController::class)->name('admin.galeries');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
