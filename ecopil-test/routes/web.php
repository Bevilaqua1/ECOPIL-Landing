<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtikelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/artikel',         [ArtikelController::class, 'index'])->name('artikel.index');
Route::get('/artikel/{slug}',  [ArtikelController::class, 'show'])->name('artikel.show');