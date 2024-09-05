<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{
    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        if ($user) {
            return view('admin.editar-usuario', compact('user'));
        }
    }
    public function update(Request $request,string $id)
    {
        $user = User::findOrFail($id);
        if ($user) {
            $user->name = $request->input('name');
            $user->save();
            return redirect()->route('users.edit', compact('user'));
        }
    }



    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        if ($user) {
            $user->delete();
            return redirect()->route('users.index')->with('sucess', 'Usuário excluido com sucesso');
        }
    }
}
