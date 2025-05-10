<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

// Route::get('/', function () {
//    return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/api',[HomeController::class,'api'])->name('api');