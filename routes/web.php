<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GamesController;

// Página de inicio
Route::get('/', [GamesController::class, 'index'])->name('dashboard');

// Eliminar juego
Route::get('/eliminar/{games}', [GamesController::class, 'destroy'])
    ->where('games','[0-9]+')
    ->name('game.delete');

// Agregar juego
Route::post('/agregar/', [GamesController::class, 'store'])->name('game.add');

// Editar juego
Route::post('/editar/{games}', [GamesController::class, 'update'])
    ->where('games','[0-9]+')
    ->name('game.update');