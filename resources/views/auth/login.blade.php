@extends("layouts.main")

@section("title", "SINPROBAU")

@section("content")
    <div class="w-full h-full flex justify-center items-center">
    <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tela de Login</title>
  <style>
    /* Reset básico */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: Arial, sans-serif;
    }

    /* Estilo do contêiner de login */
    .login-container {
      background-color: #ffffff; /* Branco */
      padding: 2rem;
      width: 300px;
      border-radius: 8px;
      box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
      text-align: center;
      margin-top: 50px; /* Espaçamento do topo */
      margin-bottom: 50px; /* Espaçamento do rodapé */
    }

    /* Título */
    .login-container h2 {
      color: #0b3d0b; /* Verde escuro */
      margin-bottom: 1.5rem;
    }

    /* Estilo dos campos de entrada */
    .login-container input[type="text"],
    .login-container input[type="password"] {
      width: 100%;
      padding: 0.8rem;
      margin-bottom: 1rem;
      border: 1px solid #0b3d0b;
      border-radius: 4px;
      outline: none;
    }

    /* Estilo do botão de login */
    .login-container button {
      width: 100%;
      padding: 0.8rem;
      background-color: #0b3d0b; /* Verde escuro */
      color: #ffffff;
      border: none;
      border-radius: 4px;
      font-size: 1rem;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .login-container button:hover {
      background-color: #086408; /* Verde mais escuro para o hover */
    }
  </style>
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form>
      <label for="usuario">Usuário</label>
      <input type="text" id="usuario" placeholder="Digite seu usuário">
      
      <label for="senha">Senha</label>
      <input type="password" id="senha" placeholder="Digite sua senha">
      
      <button type="submit">Entrar</button>
    </form>
  </div>
</body>
</html>


    </div>


@endsection
