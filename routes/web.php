<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Count;
use App\Livewire\NumberToWord;
use App\Livewire\Users;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('Home');


Route::get('/count', Count::class);
Route::get('/users', Users::class);
Route::get('/numToword', NumberToWord::class)->name('numberToword');
