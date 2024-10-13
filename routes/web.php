<?php

use App\Http\Controllers\UsuarioController;

use Illuminate\Support\Facades\{
    Route,
    Artisan,
};

// Limpa o cache de todo o sistema.
Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

// Limpa o cache de rotas.
Route::get('/route-clear', function () {
    Artisan::call('route:clear');
    return "Cache is cleared";
});

// Limpa o cache de configuração.
Route::get('/config-clear', function () {
    Artisan::call('config:clear');
    return "Cache is cleared";
});

// Limpa o cache de views (arquivos Blade compilados).
Route::get('/view-clear', function () {
    Artisan::call('view:clear');
    return "View is cleared";
});

/* Cria um link simbólico entre o diretório storage e o diretório público (public).
Isso é necessário para que arquivos armazenados (como uploads) sejam acessíveis publicamente. */
Route::get('/storage-link', function () {
    Artisan::call('storage:link');
    return "View is cleared";
});


// ROTAS PARA USUÁRIO
Route::get('/', [UsuarioController::class, 'index'])->name('usuario.index');
Route::post('/', [UsuarioController::class, 'store'])->name('usuario.store');
Route::get('/usuario/edit/{id}', [UsuarioController::class, 'edit'])->name('usuario.edit');
Route::post('/usuario/update/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
Route::post('/usuario/delete/{id}', [UsuarioController::class, 'delete'])->name('usuario.delete');
Route::get('/usuario/show/{id}', [UsuarioController::class, 'show'])->name('usuario.show');
