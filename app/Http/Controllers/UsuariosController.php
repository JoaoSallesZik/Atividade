<?php
 
namespace Unesc\Http\Controllers;
 
use Illuminate\Http\Request;
use Unesc\Usuarios;

class UsuariosController extends Controller
{
    public function index() {

        $user_nick = 'usuarios';
        $usuarios = Usuarios::all();

        return view('usuarios.index', ["user_nick" => $user_nick, "usuarios" => $usuarios]);
    }

    public function create() {

        $user_nick = "Novo Usuarios";

        return view('usuarios.create', ["user_nick" => $user_nick]);
    }

    public function store(Request $request) {
        $formData = $request->all();

        Usuarios::create($formData);

        return redirect('/usuarios');
    }

    public function edit($id) {
        
        $user_nick = "Editar Usuarios";
        
        $usuario = Usuarios::find($id);

        return view('usuarios.edit', ["user_nick" => $user_nick, "usuario" => $usuario]);
    }

    public function update(Request $request, $id) {
        $formData = $request->all();

        $usuario = Usuarios::find($id);
        
        $usuario->update($formData);

        return redirect('/usuarios');
    }

    public function destroy($id) {
        $usuario = Usuarios::find($id);
        
        $usuario->delete();

        return redirect('/usuarios');
    }
}
