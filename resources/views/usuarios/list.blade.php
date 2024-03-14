@extends('layout.app')

@section('title', 'Usuários')
<body>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 10vh;
            flex-direction: column;
        }
        table {
            width: 100%;
            border-collapse: collapse; 
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8xp;
            text-align: center;
        }
        th{
            background-color: #f2f2f2;
        }

        h1 {
            color: #007bff;
            text-align: center;
        }

        .btn {
            display: inline-block;
            padding: 15px 30px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            width: 210px;
            text-align: center;
            box-sizing: border-box;
            font-size: 16px;
        }

    </style>
    <h1>Usuários</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>CPF</th>
                <th>Data de Nascimento</th>
                <th>Rua</th>
                <th>Numero</th>
                <th>Complemento</th>
                <th>CEP</th>
                <th>Cidade</th>
                <th>UF</th>
                <th>Ativo</th>
                <th>Criado em</th>
                <th>Atualizado em</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr>
                    <td>{{ $usuario->id }}</td>
                    <td>{{ $usuario->nome }}</td>
                    <td>{{ $usuario->email }}</td>
                    <td>{{ $usuario->cpf }}</td>
                    <td>{{ date('d/m/Y', strtotime($usuario->data_nascimento)) }}</td>
                    <td>{{ $usuario->rua }}</td>
                    <td>{{ $usuario->num_rua }}</td>
                    <td>{{ $usuario->complemento }}</td>
                    <td>{{ $usuario->cep }}</td>
                    <td>{{ $usuario->cidade }}</td>
                    <td>{{ $usuario->UF }}</td>
                    <td>
                        @if($usuario->ativo == 1)
                            ATIVO
                        @elseif($usuario->ativo == 0)
                            INATIVO
                        @endif
                    </td>
                    <td>{{ $usuario->created_at }}</td>
                    <td>{{ $usuario->updated_at }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div class="container">
    <a href="/home" class="btn btn-primary">Voltar à página inicial</a>
    </div>
</body>
</html>

