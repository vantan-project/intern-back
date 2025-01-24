<?php

use App\Http\Controllers\FunaTopController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("funa")->group(function () {
    Route::get('/top', [FunaTopController::class, 'index'])->name('funa.top.index');
});