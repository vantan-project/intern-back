<?php

use App\Http\Controllers\RukaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix("ruka")->group(function(){
    Route::get("/top", [RukaController::class, "index"])->name("ruka.top.index");
});
