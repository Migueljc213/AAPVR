<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\NoticiaController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/',[PaginasController::class, 'home'] )->name('home');

Route::get('/agenda', function () {
    return view('paginas.agenda-medica');
})->name('agenda');

Route::get('/guia', function () {
    return view('paginas.guia-usuario');
})->name('guia-usuario');

Route::get('/premios-titutos', function () {
    return view('paginas.guia-usuario');
})->name('conquistas');

Route::get('/link-uteis', function () {
    return view('paginas.link-uteis');
})->name('link');

Route::get('/servicos', function () {
    return view('paginas.servicos');
})->name('servicos');

Route::get('/sobre', function () {
    return view('paginas.sobre');
})->name('sobre');

Route::get('/login-appvr', function () {
    return view('paginas.login');
})->name('');

Route::get('/convenio', function () {
    return view('paginas.convenio');
})->name('convenio');
Route::get('/premios-titulos', function () {
    return view('paginas.premios-titulos');
})->name('premios-titulos');

Route::get('/projetos', function () {
    return view('paginas.projetos');
})->name('projetos');


Route::middleware('auth', 'admin')->group(function () {
    Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    Route::get('admin/lista-usuarios',[UserController::class, 'index'])->name('user.index');
    Route::post('admin/lista-usuarios',[UserController::class, 'store'])->name('user.store');
    Route::get('admin/lista-usuarios/destroy/{id}',[UserController::class, 'destroy'])->name('user.destroy');    
    Route::get('admin/lista-usuarios/{id}',[UserController::class, 'edit'])->name('user.edit');    
    Route::post('admin/lista-usuarios/{id}',[UserController::class, 'update'])->name('user.update');    
    Route::patch('/user/{id}/status', [UserController::class, 'updateStatus'])->name('user.updateStatus');

    
    /*Noticias */
    Route::get('admin/noticias',[NoticiaController::class, 'getNoticias'])->name('noticias.index');
    Route::post('admin/noticias',[NoticiaController::class, 'setNoticias'])->name('noticias.create');
    Route::get('admin/noticias/{id}',[NoticiaController::class, 'editNoticias'])->name('noticias.edit');
    Route::post('admin/noticias/{id}',[NoticiaController::class, 'updateNoticias'])->name('noticias.update');
    Route::get('admin/noticias/destroy/{id}',[NoticiaController::class, 'destroyNoticias'])->name('noticias.destroy');
    /*Noticias */


    Route::get('admin/banners',[BannerController::class, 'index'])->name('banners.index');
    Route::post('admin/banners',[BannerController::class, 'store'])->name('banners.store');
    Route::get('admin/banners/{id}',[BannerController::class, 'edit'])->name('banners.edit');
    Route::post('admin/banners/{id}',[BannerController::class, 'update'])->name('banners.update');
    Route::get('admin/banners/destroy/{id}',[BannerController::class, 'destroy'])->name('banners.destroy');
 
});