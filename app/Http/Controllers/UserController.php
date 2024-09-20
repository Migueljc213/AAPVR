<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function index()
    {
        $usuarios = User::where('role', 'user')->get();
        return view('admin.usuarios', compact(['usuarios']));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|unique:users,email', // Assume que a tabela é 'users' e o campo é 'email'
            'cpf' => 'required|unique:users,cpf|max:12', // Assume que a tabela é 'users' e o campo é 'cpf'
            'role' => 'string', // Adicione 'string' para garantir que o campo role seja tratado como texto
            'password' => 'required|string|min:8', // Adiciona uma regra para o mínimo de caracteres para segurança
        ], [
            'name.required' => 'O nome é obrigatório!',
            'email.required' => 'O email é obrigatório!',
            'email.email' => 'O email deve ser um endereço de email válido!',
            'email.unique' => 'O email já está cadastrado!',
            'cpf.required' => 'O CPF é obrigatório!',
            'cpf.unique' => 'O CPF já está cadastrado!',
            'password.required' => 'A senha é obrigatória!',
            'password.min' => 'A senha deve ter pelo menos 8 caracteres!',
        ]);
        $banners = new User();
        $banners->name = $request->input('name');
        $banners->email = $request->input('email');
        $banners->cpf = $request->input('cpf');
        $banners->role = $request->input('role');
        $banners->password = bcrypt($request->input('password')); // Criptografa a senha antes de salvar
        $banners->save();
        return redirect()->route('user.index')->with('success', 'Usuário criado com sucesso!');
    }


    public function edit(string $id)
    {
        $user = User::findOrFail($id);
        if ($user) {
            return view('admin.editar-usuario', compact('user'));
        }
    }
    public function update(Request $request, string $id)
    {
        $user = User::findOrFail($id);
        if ($user) {
            $user->name = $request->input('name');
            $user->email = $request->input('email');
            $user->cpf = $request->input('cpf');
            $user->save();
            return redirect()->route('user.index', compact('user'));
        }
    }
    public function updateStatus($id, Request $request)
    {
        $user = User::findOrFail($id);
        $user->status = $user->status == 'active' ? 'inative' : 'active';
        $user->save();
    
        return redirect()->back()->with('success', 'Status atualizado com sucesso!');
    }
    

    public function destroy(string $id)
    {
        $user = User::findOrFail($id);
        if ($user) {
            $user->delete();
            return redirect()->route('user.index')->with('sucess', 'Usuário excluido com sucesso');
        }
    }
}
