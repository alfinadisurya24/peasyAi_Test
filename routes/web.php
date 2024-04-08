<?php

use App\Http\Controllers\TestingController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', [TestingController::class, 'getDataUser']);

