<?php

use App\Http\Controllers\GerencialController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/gerencial', [GerencialController::class, 'index']);




