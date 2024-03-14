@extends('layout.app')

@section('title', 'Home')
<style>
body {
  margin: 0;
  padding: 0;
  position: relative; /* Para que os elementos absolutamente posicionados fiquem em relação ao corpo */
  overflow: hidden; /* Impede a rolagem */
}

/* Estilo para os cantos */
.canto {
  position: fixed; /* Agora os cantos são fixos na janela do navegador */
  width: 500px; /* Tamanho das bolas */
  height: 500px;
  clip-path: circle(50%); /* Forma da bola */
  background-color: #007bff; /* Cor azul */
  z-index: 1; /* Ordem de empilhamento abaixo do quadrado */
}

/* Posicionamento dos cantos */
.canto-topo-esquerdo { top: -400; left: 0; }
.canto-topo-direito { top: -300; right: -200; }
.canto-baixo-esquerdo { bottom: -250; left: -100; }
.canto-baixo-direito { bottom: -200; right: -200; }

.quadrado {
  width: 1000px;
  height: 600px;
  background-color: white; /* Fundo branco */
 box-shadow: 0 0 200px rgba(0, 0, 0, 0.7); /* Sombra com desfoque */
 position: absolute; /* Posicionamento absoluto */
 z-index: 2; /* Ordem de empilhamento acima das bolas */
 left: 50%; /* Centralizar horizontalmente */
 top: 50%; /* Centralizar verticalmente */
 transform: translate(-50%, -50%); /* Centralizar horizontal e verticalmente */
 padding: 20px; /* Espaçamento interno */
 display: flex; /* Para centralizar o conteúdo internamente */
 flex-direction: column; /* Alinhar o conteúdo verticalmente */
 justify-content: center; /* Alinhar o conteúdo verticalmente */
 align-items: center; /* Alinhar o conteúdo horizontalmente */
 border-radius: 20px; /* Arredondar as bordas */
}

/* Estilo para o texto do cabeçalho */
h1 {
  font-family: 'Roboto', sans-serif; /* Fonte Roboto */
  color: #007bff; /* Cor azul */
  font-size: 74px;
  margin: 0; /* Remova a margem padrão */
  position: relative; /* Posicionamento relativo para ajustar a posição */
  top: -100px;
}

.btn {
  display: inline-block;
  padding: 20px 40px;
  background-color: #007bff; /* Cor de fundo azul */
  color: white; /* Cor do texto branca */
  text-decoration: none;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
  width: 250px; /* Largura fixa para os botões */
  text-align: center; /* Centralizar o texto horizontalmente */
  box-sizing: border-box; /* Incluir padding e border na largura total */
  font-size: 20px;
}

</style>
</head>
<body>

<!-- Cantos com bolas cortadas pela metade -->
<div class="canto canto-topo-esquerdo"></div>
<div class="canto canto-topo-direito"></div>
<div class="canto canto-baixo-esquerdo"></div>
<div class="canto canto-baixo-direito"></div>

<!-- Conteúdo dentro do quadrado -->
<div class="quadrado">
    <h1>Bem-vindo</h1>
    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Lista de Usuário</a>
    <a href="{{ route('usuarios.create')}}" class="btn btn-primary">Cadastrar Usuário</a>
    <a href="{{ route('usuarios.editar')}}" class="btn btn-primary">Editar Usuário</a>
</div>

</body>
</html>
