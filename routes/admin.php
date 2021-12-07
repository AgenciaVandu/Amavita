<?php

use App\Http\Controllers\Admin\AmavitaController;
use App\Http\Controllers\Admin\GaleryController;
use App\Http\Controllers\Admin\IndexController;
use App\Http\Controllers\Admin\ModelController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('dashboard');
});


Route::get('/index', IndexController::class)->name('admin.index');
Route::get('/galeries', GaleryController::class)->name('admin.galeries');
Route::get('/amavita', AmavitaController::class)->name('admin.amavita');
Route::get('/models', ModelController::class)->name('admin.models');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
