<?php

use App\Http\Controllers\Admin\IndexController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});


Route::get('/index', IndexController::class)->name('admin.index');
