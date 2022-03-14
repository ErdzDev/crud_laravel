<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Redirect;

class UsuariosController extends Controller
{
    //
    public function usuarios()
    {
        $usuarios = Usuario::get ();

        return view('usuarios.list', ['usuarios' => $usuarios]);
    }
    public function new()
    {
        return view('usuarios.form');
    }
    public function add(Request $request){
        $usuario = new Usuario;
        $usuario = $usuario->create ($request->all());
        return Redirect::to('/usuarios');
    }
    public function edit( $id ){
        $usuario = Usuario::findOrFail ($id);
        return view ('usuario.form', ['usuario' => $usuario]);
    }
}
