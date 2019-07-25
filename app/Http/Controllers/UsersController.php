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

    public function cadastro(Request $request)
    {
        $usuario = new Usuario();
        $usuario->name = $request->name;
        $usuario->deck = $request->deck;
        $usuario->wins = $request->wins;
        $usuario->loses = $request->loses;
        $usuario->save();
        return redirect()->to('aplication/index/');
    }
}
