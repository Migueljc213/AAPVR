<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{

    public function dashboard()
    {
        return view('admin.dashboard.index');
    }


   
}
