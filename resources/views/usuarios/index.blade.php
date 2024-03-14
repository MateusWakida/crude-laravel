@extends('layout.app')

@section('title', 'Usuários')

<head>
    <style>
        body {
            font-size: 14px; /* Ajusta o tamanho da fonte */
        }

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
            font-size: 12px; /* Ajusta o tamanho da fonte da tabela */
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .quadrado {
            width: 80%; /* Ajusta o tamanho do quadrado */
            max-width: 1000px; /* Limita o tamanho máximo do quadrado */
            height: auto; /* Ajusta a altura automaticamente */
            background-color: white; /* Fundo branco */
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3); /* Sombra */
            border-radius: 10px; /* Arredondamento das bordas */
            padding: 20px; /* Espaçamento interno */
            margin: 20px auto; /* Centraliza horizontalmente e adiciona margem superior e inferior */
            display: flex; /* Para centralizar o conteúdo internamente */
            flex-direction: column; /* Alinhar o conteúdo verticalmente */
            justify-content: center; /* Alinhar o conteúdo verticalmente */
            align-items: center; /* Alinhar o conteúdo horizontalmente */
        }

        .btn {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff; /* Cor de fundo azul */
            color: white; /* Cor do texto branca */
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            width: 200px; /* Largura fixa para os botões */
            text-align: center; /* Centralizar o texto horizontalmente */
            box-sizing: border-box; /* Incluir padding e border na largura total */
            font-size: 16px;
        }

        h1{
            color: #007bff
        }

    </style>
</head>

<body>
    <div class="quadrado">
        <h1>Usuários</h1>
        <table>
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Idade</th>
                    <th>Data de Nascimento</th>
                </tr>
            </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{ $usuario->nome }}</td>
                        <td>{{ $usuario->cpf }}</td>
                        <td>{{ date_diff(date_create($usuario->data_nascimento), date_create('today'))->y }}</td>
                        <td>{{ date('d/m/Y', strtotime($usuario->data_nascimento)) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="container">
        <a href="/usuarios/list" class="btn btn-primary">Lista completa</a>
    </div>
    </div>
    <div class="container">
        <a href="/home" class="btn btn-primary">Voltar à página inicial</a>
    </div>
</body>
</html>
