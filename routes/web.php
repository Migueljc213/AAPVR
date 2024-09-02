<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('paginas.home');
})->name('home');

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
})->name('premios&titulos');


Route::get('admin/dashboard',[AdminController::class, 'dashboard'])->middleware('auth' , 'admin')->name('admin.dashboard');
