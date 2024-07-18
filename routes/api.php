<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\MovieController;
use App\Http\Controllers\Api\DirectorController;
use App\Http\Controllers\Api\ActorController;
use App\Http\Controllers\Api\GenreController;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::post('/logout', [AuthController::class, 'logout']);
    Route::get('/user', [AuthController::class, 'user']);

    Route::apiResource('/movies', MovieController::class);
    Route::get('/movies/{id}', [MovieController::class]);

    Route::apiResource('/directors', DirectorController::class);
    Route::get('/directors/{id}', [DirectorController::class]);

    Route::apiResource('/actors', ActorController::class);
    Route::get('/actors/{id}', [ActorController::class]);

    Route::apiResource('/genres', GenreController::class);
    Route::get('/genres/{id}', [GenreController::class]);

    Route::get('/ratings/{id}', [GenreController::class]);
});