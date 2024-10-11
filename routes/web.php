<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Livewire\NumberToWord;
use App\Livewire\Users;
use App\Http\Controllers\UserController;
use App\Livewire\Count;
use Illuminate\Support\Facades\Route;

// -------------------Auth-------------------
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'processing'])->name('login');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');


Route::group(['middleware' =>  'auth'], function () {

    // -------------------frontend-------------------
    Route::get('/', [HomeController::class, 'index'])->name('Home');
    Route::get('/load-more-data', [UserController::class, 'index'])->name('load-more-data');





    // -------------------livewire-------------------
    Route::get('/count', Count::class)->name('count');
    Route::get('/users', Users::class)->name('users');
    Route::get('/numToword', NumberToWord::class)->name('numberToword');
});
