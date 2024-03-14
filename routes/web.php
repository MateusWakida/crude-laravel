<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Models\usuario;
use Illuminate\Support\Facades\Redirect;

Route::get('/usuarios', [UsuarioController::class, 'index'])->name('usuarios.index');
Route::get('/usuarios/criar', [UsuarioController::class, 'create'])->name('usuarios.create');
Route::get('/usuarios/list', [UsuarioController::class, 'list'])->name('usuarios.list');

Route::view('/home','home');
Route::view('/editar','editar');

Route::get('/usuarios/editar', [UsuarioController::class, 'editar'])->name('usuarios.editar');

Route::get('/usuarios/create', [UsuarioController::class, 'create'])->name('usuarios.create');

Route::post('/usuarios', [UsuarioController::class, 'store'])->name('usuarios.store');

Route::get('/usuarios/buscar', [UsuarioController::class, 'buscar'])->name('usuarios.search');

Route::put('/usuarios/{id}', [UsuarioController::class, 'atualizar'])->name('usuarios.update');

Route::delete('/usuarios/{id}', [UsuarioController::class, 'destroy'])->name('usuarios.destroy');

Route::post('/create', function (Request $request){
    usuario::create([
        'nome' => $request->nome,
        'email' => $request->email,
        'cpf' => $request->cpf,
        'data_nascimento' => $request->data,    
        'rua' => $request->rua,
        'num_rua' => $request->numero,
        'complemento' => $request->complemento,
        'cep' => $request->cep,
        'cidade' => $request->cidade,
        'UF' => $request->UF,
        'ativo' => $request->ativo
    ]);
    echo "Cadastrado com sucesso!<br>";
    echo "Aguarde iremos redirecionar para pagina principal";
    echo "<script>setTimeout(function() { window.location.href = '/home'; }, 5000);</script>";
    return;


});
