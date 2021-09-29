<?php

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

Route::get('/', function () {
    return view('index');
});

Route::get('/amavita', function(){
    return view ('amavita');
});

Route::get('/modelos-amavita', function() {
    return view ('modelos.modelos');
});

Route::get('/modelo-alula', function(){
    return view ('modelos.alula');
});
Route::get('/modelo-boreal', function(){
    return view ('modelos.boreal');
});
Route::get('/modelo-citala', function(){
    return view ('modelos.citala');
});
Route::get('/galeria', function(){
    return view ('gallery.index');
});
Route::get('/galeria/resultado', function(){
    return view ('gallery.show');
});
Route::get('/contacto', function(){
    return view ('contacto');
});

/*
Leads
*/ 
Route::get('/lead-alula', function(){
    return view ('modelos.lead.alula');
});
Route::get('/lead-boreal', function(){
    return view ('modelos.lead.boreal');
});
Route::get('/lead-citala', function(){
    return view ('modelos.lead.citala');
});

Route::get('/gracias-por-registrarte', function(){
    return view ('modelos.lead.gracias');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
