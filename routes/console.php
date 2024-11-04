<?php

use App\Models\PaginasGaleria;
use App\Models\User;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote')->hourly();

Artisan::command('avatar', function (){
    $usuarios = User::all();
    foreach($usuarios as $usuario){
        if($usuario->avatar == null){
            $usuario->avatar = 'https://avatar.iran.liara.run/public';
            $usuario->save();
        }

    }
});

Artisan::command('tipo', function () {
    PaginasGaleria::create([
        'href' => 'ilpi-sorrindo',
        'nome' => 'Projeto ilpi-sorrindo'
    ]);
    info("Tipo cadastrado");
});