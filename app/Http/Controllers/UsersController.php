<?php

namespace App\Http\Controllers;

use App\Usuario;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function mostrar()
    {
        $usuarios = Usuario::all();
        return view('aplication.index', compact('usuarios'));
    }

    public function formCadastro()
    {
        return view('aplication.new_user');
    }

    public function cadastro(Request $request)
    {
        $usuario = new Usuario();
        $usuario->name = $request->name;
        $usuario->deck = $request->deck;
        $usuario->wins = $request->wins;
        $usuario->loses = $request->loses;
        $usuario->save();
        return redirect()->to('aplication');
    }

    public function formEditar($id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            abort(404);
        }
        return view ('aplication.edit', compact('usuario'));
    }

    public function editar(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario) {
            abort(404);
        }
        $usuario->name = $request->name;
        $usuario->deck = $request->deck;
        $usuario->wins = $request->wins;
        $usuario->loses = $request->loses;
        $usuario->save();
        return redirect()->to('aplication');
    }

    public function excluir(Request $request, $id)
    {
        $usuario = Usuario::find($id);
        if (!$usuario){
            abort(404);
        }
        $usuario->delete();
        return redirect()->to('aplication');
    }

}
