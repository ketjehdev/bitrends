<?php

use App\Http\Controllers\Bitrends\BitrendsController;
use App\Http\Controllers\Ecommerce\EcommerceController;
use App\Http\Controllers\Home\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/bitrends', [BitrendsController::class, 'bitrends'])->name('bitrends');
Route::get('/ecommerce', [EcommerceController::class, 'ecommerce'])->name('ecommerce');
