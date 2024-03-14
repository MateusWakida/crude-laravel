@extends('layout.app')

@section('title', 'Cadastro')
<head>
    <style>
        .quadrado {
            width: 80%;
            max-width: 1000px;
            height: auto;
            background-color: white;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
            border-radius: 10px;
            padding: 20px; 
            margin: 20px auto;
            display: flex;
            flex-direction:
            justify-content: center;
            align-items: center;
        }
        .btn {
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            width: 200px;
            text-align: center;
            box-sizing: border-box;
            font-size: 16px;
            margin: 0px auto;
            display: block;
        }
        
        h1{
            color: #007bff
        }

    </style>
    <body>
        <div class="quadrado">
        <h1>Cadastrar novo usuário</h1>

            <form action="/create" method="POST">
                @csrf
                <label for="">Nome:</label>
                <input type="text" name="nome">
                <br></br>
                <label for="">Email:</label>
                <input type="text" name="email">
                <br></br>
                <label for="">CPF:</label>
                <input type="text" name="cpf">
                <br></br>
                <label for="">Data de aniversaio:</label>
                <input type="Date" name="data">
                <br></br>
                <label for="">Rua:</label>
                <input type="text" name="rua">
                <br></br>    
                <label for="">Numero:</label>
                <input type="number" name="numero">
                <br></br>
                <label for="">Complemento(Opcional):</label>
                <input type="text" name="complemento">
                <br></br>
                <label for="">CEP:</label>
                <input type="number" name="cep">
                <br></br>
                <label for="">Cidade:</label>
                <input type="text" name="cidade">
                <br></br>
                <label for="">UF:</label>
                <select  name="UF">
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
                <select name="ativo">
                    <option value="1">Sim</option>
                    <option value="0">Não</option>  
                <select>
                <br></br>
                <button type="submit">Cadastrar</button>
            </form>
        </div>    
            <br></br>
        <a href="/home" class="btn">Voltar à página inicial</a>
        
    </body>
</head>
</html>

