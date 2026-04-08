<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\SalleController;
    //API route protegees pour l'authentification des utilisateur (prestataire ou client)
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
    //API pour la deconnection et pour recuperer les informations de l'utilisateur authentifie
Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', [AuthController::class, 'me']);
    Route::post('/logout', [AuthController::class, 'logout']);

    // API routes protégées pour les salles
    Route::get('/salles', [SalleController::class, 'index']);
    Route::get('/salles/{id}', [SalleController::class, 'show']);
});