<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


// ROTAS PARA USUÁRIO
Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuario.index');
Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuario.store');
