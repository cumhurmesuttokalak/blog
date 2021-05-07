<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PanelController;
use App\Http\Controllers\BlogController;

Route::get('/', [HomeController::class, 'index']);


Route::prefix('panel')->group(function () {
    Route::get('/',[PanelController::class,'index']);
    Route::get('/admins',[PanelController::class,'admins']);

    Route::get("/ekle",[BlogController::class,'index']);
    Route::get("/eklee",[BlogController::class,'userr']);
    Route::get("/eklelan",[BlogController::class,'ekle']);

});
