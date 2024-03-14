@extends('layout.app')

@section('title', 'Home')
<style>
body {
  margin: 0;
  padding: 0;
  position: relative;
  overflow: hidden;
}

.canto {
  position: fixed;
  width: 500px; 
  height: 500px;
  clip-path: circle(50%);
  background-color: #007bff;
  z-index: 1;
}


.canto-topo-esquerdo { top: -400; left: 0; }
.canto-topo-direito { top: -300; right: -200; }
.canto-baixo-esquerdo { bottom: -250; left: -100; }
.canto-baixo-direito { bottom: -200; right: -200; }

.quadrado {
  width: 1000px;
  height: 600px;
  background-color: white;
 box-shadow: 0 0 200px rgba(0, 0, 0, 0.7);
 position: absolute;
 z-index: 2;
 left: 50%;
 top: 50%;
 transform: translate(-50%, -50%);
 padding: 20px;
 display: flex;
 flex-direction: column;
 justify-content: center;
 align-items: center;
 border-radius: 20px;
}


h1 {
  font-family: 'Roboto', sans-serif;
  color: #007bff;
  font-size: 74px;
  margin: 0;
  position: relative;
  top: -100px;
}

.btn {
  display: inline-block;
  padding: 20px 40px;
  background-color: #007bff;
  color: white;
  text-decoration: none;
  border: none;
  border-radius: 5px;
  cursor: pointer;
  margin-top: 10px;
  width: 250px;
  text-align: center;
  box-sizing: border-box;
  font-size: 20px;
}

</style>
</head>
<body>


<div class="canto canto-topo-esquerdo"></div>
<div class="canto canto-topo-direito"></div>
<div class="canto canto-baixo-esquerdo"></div>
<div class="canto canto-baixo-direito"></div>


<div class="quadrado">
    <h1>Bem-vindo</h1>
    <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Lista de Usuário</a>
    <a href="{{ route('usuarios.create')}}" class="btn btn-primary">Cadastrar Usuário</a>
    <a href="{{ route('usuarios.editar')}}" class="btn btn-primary">Editar Usuário</a>
</div>

</body>
</html>
