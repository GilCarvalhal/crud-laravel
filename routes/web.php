<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;


// ROTAS PARA USUÁRIO
Route::get('/', [UsuarioController::class, 'index'])->name('usuario.index');
Route::post('/', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('/usuario/edit/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::post('/usuario/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
