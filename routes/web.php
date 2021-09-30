<?php

use App\Http\Controllers\GaleryController;
use App\Http\Controllers\LandingController;
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

Route::get('/amavita', function () {
    return view('amavita');
});

Route::get('/modelos-amavita', function () {
    return view('modelos.modelos');
});

Route::get('/modelo-alula', function () {
    return view('modelos.alula');
});
Route::get('/modelo-boreal', function () {
    return view('modelos.boreal');
});
Route::get('/modelo-citala', function () {
    return view('modelos.citala');
});
Route::get('/galeria', [GaleryController::class, 'index'])->name('galery.index');
Route::get('/galeria/{album}', [GaleryController::class, 'show'])->name('galery.show');
Route::get('/contacto', function () {
    return view('contacto');
});

/*
Leads
*/
Route::get('/lead-alula', function () {
    return view('modelos.lead.alula');
});
Route::get('/lead-boreal', function () {
    return view('modelos.lead.boreal');
});
Route::get('/lead-citala', function () {
    return view('modelos.lead.citala');
});

Route::get('/gracias-por-registrarte', function () {
    return view('modelos.lead.gracias');
});
