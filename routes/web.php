<?php

use App\Http\Controllers\AmavitaController;
use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\ModelController;
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

Route::get('/', [LandingController::class, 'index'])->name('index');
Route::get('/contacto', [LandingController::class, 'contact'])->name('contacto');
Route::get('/amavita', [AmavitaController::class, 'index'])->name('amavita.index');
Route::get('/galeria', [GaleryController::class, 'index'])->name('galery.index');
Route::get('/galeria/{album}', [GaleryController::class, 'show'])->name('galery.show');
Route::get('/modelos-amavita', [ModelController::class, 'index'])->name('models.index');
Route::get('/{model}', [ModelController::class, 'show'])->name('models.show');
Route::get('/lead/{model}', [ModelController::class, 'lead'])->name('models.leads');
Route::get('/lead/gracias', [LandingController::class, 'tanks'])->name('tanks');
