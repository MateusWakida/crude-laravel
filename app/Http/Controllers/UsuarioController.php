<?php

namespace App\Http\Controllers;

use App\Models\usuario;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    
    public function index()   
    {
        $usuarios = Usuario::all();
        return view('usuarios.index', compact('usuarios'));
    }

    public function list()   
    {
    $usuarios = Usuario::all();
    return view('usuarios.list', compact('usuarios'));
    }
    
    public function create()
    {
        return view('usuarios.creat');
    }
    
    public function store(Request $request)
    {
        $request->validate([
            'ativo' => [
                'required',
                function ($attribute, $value, $fail) {
                    if ($value !== 'sim' && $value !== 'não') {
                        $fail('O campo ativo deve ser "sim" (ativo) ou "não" (inativo).');
                    }
                }
            ]
        ]);

        Usuario::create($request->all());

        return redirect()->view('usuarios.index')->with('Usuário criado');
    }

    public function show($cpf)
    {
        try {
            $usuario = Usuario::where('cpf', $cpf)->firstOrFail();
            return view('usuario.show', compact('usuario'));
        } catch (\Illuminate\database\Eloquet\ModelNotFoundException $e){
            return 'Usuário não encontrado';
        }
    }


    public function deletar($cpf)
    {
        try{
            $usuario = Usuario::where('cpf', $cpf)->firstOrFail();
            $usuario->delete();
            return redirect()->route('usuario.index')->with('Usuário deletado com sucesso');
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            return 'Usuário não encontrado';
        }
    }

    public function editar()
    {
        return view('usuarios.editar');
    }

    public function buscar(Request $request)
    {
        $cpf = $request->input('cpf');

        $usuario = Usuario::where('cpf', $cpf)->first();

        if ($usuario) {
            return view('usuarios.editar', compact('usuario'));
        } else {
            return back()->with('error', 'Usuário não encontrado.');
        }
    }
    
    public function atualizar(Request $request, $id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->update($request->all());

        return redirect()->route('usuarios.index')->with('success', 'Usuário atualizado com sucesso!');
    }



    public function destroy($id)
    {
        $usuario = Usuario::findOrFail($id);
        $usuario->delete();

        return redirect()->route('usuarios.index')->with('success', 'Usuário excluído com sucesso');
    }

    private function calcularIdade($data_nascimento) {
        return Carbon::parse($data_nascimento)->age;

    }
};