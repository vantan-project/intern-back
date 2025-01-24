<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShimoTopController;


Route::get('/', function () {
    return view('welcome');
});

Route::prefix("shimo")->group(function(){
    Route::get('/top',[ShimoTopController::class,'index'])->name("shimo.top.index");
});
