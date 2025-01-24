<?php

use App\Http\Controllers\RukaController;
use App\Http\Controllers\FunaTopController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShimoTopController;

Route::prefix("shimo")->group(function(){
    Route::get('/top',[ShimoTopController::class,'index'])->name("shimo.top.index");
});

Route::prefix("ruka")->group(function(){
    Route::get("/top", [RukaController::class, "index"])->name("ruka.top.index");
});

Route::prefix("funa")->group(function () {
    Route::get('/top', [FunaTopController::class, 'index'])->name('funa.top.index');
});

Route::prefix("funa")->group(function () {
    Route::get('/top', [FunaTopController::class, 'index'])->name('funa.top.index');
});