@extends('layout.app')

@section('title', 'Editar')
<head>
    <style>
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

        h1{
            color: #007bff
        }

        .btn {
            padding: 10px 20px;
            background-color: #007bff; /* Cor de fundo azul */
            color: white; /* Cor do texto branca */
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 200px; /* Largura fixa para os botões */
            text-align: center; /* Centralizar o texto horizontalmente */
            box-sizing: border-box; /* Incluir padding e border na largura total */
            font-size: 16px;
            margin: 0px auto; /* Centraliza horizontalmente */
            display: block; /* Define o botão como bloco para que a margem automática funcione */
        }

        .btna {
            padding: 5px 10px;
            background-color: #007bff; /* Cor de fundo azul */
            color: white; /* Cor do texto branca */
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 130px; /* Largura fixa para os botões */
            text-align: center; /* Centralizar o texto horizontalmente */
            box-sizing: border-box; /* Incluir padding e border na largura total */
            font-size: 14px;
            margin: 0px auto; /* Centraliza horizontalmente */
            display: block; /* Define o botão como bloco para que a margem automática funcione */
            margin-left: -0px;
        }

        .btnd {
            padding: 5px 10px;
            background-color: #007bff; /* Cor de fundo azul */
            color: white; /* Cor do texto branca */
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 130px; /* Largura fixa para os botões */
            text-align: center; /* Centralizar o texto horizontalmente */
            box-sizing: border-box; /* Incluir padding e border na largura total */
            font-size: 14px;
            margin: -38px 0 0 -178px; /* Define a margem superior como -10px e a margem esquerda como -190px */
            display: block; /* Define o botão como bloco para que a margem automática funcione */
        }


        label{
            font-weight: bold;
        }

    </style>
    <body>
        <div class="quadrado">
            <h1>Editar Usuario</h1>

            <form action="{{ route('usuarios.search') }}" method="GET">
            @csrf
            <label for="cpf">Digite o CPF que deseja editar:</label>
            <input type="text" name="cpf">
            <button type="submit">Buscar</button>
            <br></br>
            </form>
            @if (isset($usuario))
            <form action="{{ route('usuarios.update', $usuario->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Nome:</label>
                <input type="text" name="nome" value="{{ $usuario->nome }}">
                <br></br>
                <label for="">Email:</label>
                <input type="text" name="email" value="{{ $usuario->email }}">
                <br></br>
                <label for="">CPF:</label>
                <input type="text" name="cpf" value="{{ $usuario->cpf }}">
                <br></br>
                <label for="">Data de aniversaio::</label>
                <input type="Date" name="data" value="{{ $usuario->data }}">
                <br></br>
                <label for="">Rua:</label>
                <input type="text" name="rua" value="{{ $usuario->rua }}">
                <br></br>
                <label for="">Numero:</label>
                <input type="text" name="numero" value="{{ $usuario->numero }}">
                <br></br>
                <label for="">Complemento(Opcional):</label>
                <input type="text" name="complemento" value="{{ $usuario->complemento }}">
                <br></br>
                <label for="">CEP:</label>
                <input type="text" name="cep" value="{{ $usuario->cep }}">
                <br></br>
                <label for="">Cidade:</label>
                <input type="text" name="cidade" value="{{ $usuario->cidade }}">
                <br></br>
                <label for="">UF:</label>
                <select  name="UF" value="{{ $usuario->UF }}">
                        <option value="" selected disabled>Selecione o UF</option>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MT</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                    <br></br>
                <label for="">Ativo:</label>
                    <select name="ativo" value="{{ $usuario->ativo }}">
                        <option value="1">Sim</option>
                        <option value="0">Não</option>  
                    </select>
                    <br></br>
                <button class="btna" type="submit">Atualizar</button>
            </form>
            <br></br>
            <form action="{{ route('usuarios.destroy', $usuario->id) }}" method="POST" id="deleteForm">
                @csrf
                @method('DELETE')
                <button type="button" onclick="confirmDelete()" class="btnd" style="background-color: red; color: white;">Excluir Usuário</button>
            </form>
            <script>
            function confirmDelete() {
                if (confirm('Tem certeza que deseja excluir este usuário?')) {
                    document.getElementById('deleteForm').submit();
                }
            }
            </script>
            @endif
            <br></br>
            <a href="/home" class="btn">Voltar à página inicial</a>
        </div>
    </body>
</head>
</html>

