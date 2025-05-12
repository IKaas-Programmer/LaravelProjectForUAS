<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;

// Route::get('/', function () {
//    return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/article',[HomeController::class,'article'])->name('article');

Route::get('/api',[HomeController::class,'api'])->name('api');

Route::get('/page',[HomeController::class,'page'])->name('page');

Route::get('/comment',[HomeController::class,'comment'])->name('comment');

Route::get('/agendas',[HomeController::class,'agendas'])->name('agendas');

Route::get('/about',[HomeController::class,'about'])->name('about');