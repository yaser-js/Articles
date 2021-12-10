<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

Route::group(['middleware' => 'api'], function ($router) {
Route::post('login', [ApiController::class, 'authenticate']);
Route::post('refresh', [ApiController::class, 'refresh']);
Route::post('register', [ApiController::class, 'register']);
Route::post('logout', [ApiController::class, 'logout']);
});

