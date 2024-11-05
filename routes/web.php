<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\GaleriasController;
use App\Http\Controllers\Admin\NoticiaController;
use App\Http\Controllers\Admin\PasseiosController;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\WorkshopController;
use App\Http\Controllers\ComentariosController;
use App\Models\Comentario;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';



Route::get('/agenda', function () {
    return view('paginas.agenda-medica');
})->name('agenda');

Route::get('/guia-usuario', function () {
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

Route::get('/projeto-inclusao', function () {
    return view('paginas.inclusao');
})->name('inclusao');

Route::get('/projeto-viva', function () {
    return view('paginas.viva');
})->name('viva');


Route::get('/CIPA', function () {
    return view('paginas.cipa');
})->name('cipa');

Route::get('/projeto-humanizacao', function () {
    return view('paginas.humanizacao');
})->name('humanizacao');


Route::get('/projeto-pacote-office', [PaginasController::class, 'pacoteOffice'])->name('pacote-office');
Route::get('/projeto-ilpi-sorrindo', [PaginasController::class, 'ilpiSorrindo'])->name('ilpi-sorrindo');
Route::get('/projeto-educacao-financeira', [PaginasController::class, 'educacaoFinanceira'])->name('educacao-financeira');


Route::get('/apostila-titulo-upe-2023-e-2024', function () {
    return view('paginas.titulo-upe');
})->name('titulo-upe');

Route::get('/lista-atualizada-de-dirigentes', function () {
    return view('paginas.governanca');
})->name('governanca');

Route::get('/portaria', function () {
    return view('paginas.portaria');
})->name('portaria');

Route::get('/lgpd', function () {
    return view('paginas.lgpd');
})->name('lgpd');

Route::get('/estatuto', function () {
    return view('paginas.estatuto');
})->name('estatuto');

Route::get('/balanco-patrimonial', function () {
    return view('paginas.balanco');
})->name('balanco');

Route::get('/termos-de-fomento', function () {
    return view('paginas.termos-fomento');
})->name('termos-fomento');



Route::get('/projeto-e-idoso', function () {
    return view('paginas.e-idoso');
})->name('e-idoso');


// Route::middleware('auth', 'user')->prefix('user.')->group(function () {
//     Route::get('dashboard', [::class, 'index'])->name('index');
// });
Route::get('/', [PaginasController::class, 'home'])->name('home');
Route::get('/noticia/{id}', [PaginasController::class, 'noticiaShow'])->name('noticia.show');
Route::get('/noticias', [PaginasController::class, 'noticiasIndex'])->name('noticia.index');


Route::controller(ComentariosController::class)->prefix('comentarios')->name('comentarios.')->group(function () {
    Route::post('/comentarios', 'store')->name('store');
});

Route::middleware('auth', 'admin')->group(function () {
    Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');

    Route::get('admin/lista-usuarios', [UserController::class, 'index'])->name('user.index');
    Route::post('admin/lista-usuarios', [UserController::class, 'store'])->name('user.store');
    Route::get('admin/lista-usuarios/destroy/{id}', [UserController::class, 'destroy'])->name('user.destroy');
    Route::get('admin/lista-usuarios/{id}', [UserController::class, 'edit'])->name('user.edit');
    Route::post('admin/lista-usuarios/{id}', [UserController::class, 'update'])->name('user.update');
    Route::patch('/user/{id}/status', [UserController::class, 'updateStatus'])->name('user.updateStatus');


    /*Noticias */
    Route::get('admin/noticias', [NoticiaController::class, 'getNoticias'])->name('noticias.index');
    Route::post('admin/noticias', [NoticiaController::class, 'setNoticias'])->name('noticias.create');
    Route::get('admin/noticias/{id}', [NoticiaController::class, 'editNoticias'])->name('noticias.edit');
    Route::post('admin/noticias/{id}', [NoticiaController::class, 'updateNoticias'])->name('noticias.update');
    Route::get('admin/noticias/destroy/{id}', [NoticiaController::class, 'destroyNoticias'])->name('noticias.destroy');
    Route::get('admin/noticias/comentarios/{id}', [ComentariosController::class, 'getComentarios'])->name('noticias.comentarios');
    Route::get('admin/noticias/comentarios/destroy/{id}', [ComentariosController::class, 'destroyComentarios'])->name('noticias.comentarios.destroy');
    /*Noticias */


    Route::get('admin/banners', [BannerController::class, 'index'])->name('banners.index');
    Route::post('admin/banners', [BannerController::class, 'store'])->name('banners.store');
    Route::get('admin/banners/{id}', [BannerController::class, 'edit'])->name('banners.edit');
    Route::post('admin/banners/{id}', [BannerController::class, 'update'])->name('banners.update');
    Route::get('admin/banners/destroy/{id}', [BannerController::class, 'destroy'])->name('banners.destroy');

    Route::prefix('galeria')->name('galeria.')->controller(GaleriasController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/show/{id}', 'show')->name('show');
        Route::post('/novo', 'novo')->name('novo');
        Route::get('/delete/{id}', 'delete')->name('delete');
    });

    Route::prefix('passeios')->name('passeios.')->controller(PasseiosController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('create');
        Route::get('/editar/{id}', 'edit')->name('edit');
        Route::post('/editar/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });

    Route::prefix('workshops')->name('workshops.')->controller(WorkshopController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::post('/', 'store')->name('create');
        Route::get('/editar/{id}', 'edit')->name('edit');
        Route::post('/editar/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
    });
});
