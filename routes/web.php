<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/',         [PageController::class, 'home'])->name('home');
Route::get('/nails',    [PageController::class, 'nails'])->name('nails');
Route::get('/lashes',   [PageController::class, 'lashes'])->name('lashes');
Route::get('/waxing',   [PageController::class, 'waxing'])->name('waxing');
Route::get('/brows',    [PageController::class, 'brows'])->name('brows');
Route::get('/lips',     [PageController::class, 'lips'])->name('lips');
Route::get('/press-on', [PageController::class, 'presson'])->name('presson');
Route::get('/pricelist',[PageController::class, 'pricelist'])->name('pricelist');
Route::get('/kontak',   [PageController::class, 'kontak'])->name('kontak');
Route::get('/lokasi',   [PageController::class, 'lokasi'])->name('lokasi');
