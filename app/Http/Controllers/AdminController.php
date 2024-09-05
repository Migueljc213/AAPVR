<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use App\Models\User;
use DateTime;
use Illuminate\Container\Attributes\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{

  

    public function dashboard()
    {
        return view('admin/dashboard');
    }

    public function getUsers()
    {
        $usuarios = User::where('role', 'user')->get();
        return view('admin.usuarios', compact(['usuarios']));
    }

   
}
