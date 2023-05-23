<?php

session_set_cookie_params(900); // 15 minutos
session_start();

$conexao = mysqli_connect('127.0.0.1', 'root', '', 'tcc');

if (isset($_SESSION['nome']) && isset($_SESSION['email'])) {
  header("location: index.php");
  exit;
}

if (isset($_SESSION['last_access']) && time() - $_SESSION['last_access'] > 900) {
  session_destroy();
  header("location: login.php");
  exit;
}

if (isset($_POST['entrar'])) {
  // Verificar no bd se existe o usuário
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // Verifica se a senha está criptografada
  $sql = "SELECT * FROM usuario WHERE email = '{$email}' AND senha = '{$senha}'";
  $resultado = mysqli_query($conexao, $sql);
  $numLinhas = mysqli_num_rows($resultado);

  if ($numLinhas == 0) {
    // Verifica se a senha está sem criptografia
    $sql = "SELECT senha FROM usuario WHERE email = '{$email}'";
    $resultado = mysqli_query($conexao, $sql);
    $linha = mysqli_fetch_array($resultado);
    $senhaArmazenada = $linha['senha'];

    if (password_verify($senha, $senhaArmazenada)) {
      $sql = "SELECT * FROM usuario WHERE email = '{$email}'";
      $resultado = mysqli_query($conexao, $sql);
      $linha = mysqli_fetch_array($resultado);

      $_SESSION['nome'] = $linha['nome'];
      $_SESSION['email'] = $linha['email'];
      $_SESSION['last_access'] = time();

      header("location: index.php");
      exit;
    }
  } else {
    $linha = mysqli_fetch_array($resultado);

    $_SESSION['nome'] = $linha['nome'];
    $_SESSION['email'] = $linha['email'];
    $_SESSION['last_access'] = time();

    header("location: index.php");
    exit;
  }

  $mensagem = "Usuário e senha inválidos";
  header("location: login.php?mensagem={$mensagem}");
  exit;
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login de Usuario</title>
  <link rel="stylesheet" href="main.css">
</head>

<body>
  <div class="page">
    <form method="POST" class="formLogin">
      <h1>Login</h1>
      <p>Digite os seus dados de acesso no campo abaixo.</p>
      <label for="email">E-mail</label>
      <input name="email" type="email" id="email" placeholder="Digite seu e-mail" autofocus="true" />
      <label for="password">Senha</label>
      <input name="senha" type="password" id="senha" placeholder="Digite sua senha" />
      <a href="esqueceuSenha.php" onclick="return confirm('Esqueceu a senha? clique OK para redefini-la')"> Esqueci minha Senha </a>
      <button name="entrar" type="submit" class="btn btn-primary">Entrar</button>
      <br>
      Crie um usuario em nosso sistema:<br>
      <a href="cadastroUsuario.php" onclick="return confirm('Quer criar um usuario para acessar o sistema ?')">
      <button  class="btn btn-danger" type="button">Cadastre-se aqui</button>
    </form>
  </div>

</body>
</html>