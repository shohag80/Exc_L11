<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Livewire\Count;
use Illuminate\Support\Facades\Route;

// -------------------frontend-------------------
Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/load-more-data', [UserController::class, 'index'])->name('load-more-data');



// -------------------livewire-------------------
Route::get('/count', Count::class);

