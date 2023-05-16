<?php

$$conexao = mysqli_connect('127.0.0.1', 'root', '', 'tcc');

$login = $_POST['login'];
$entrar = $_POST['entrar'];
$senha = md5($_POST['senha']);

if (isset($entrar)) {


    $sql = "SELECT * FROM usuarios
     WHERE login ='$login' AND senha = '$senha'"
        or die("erro ao selecionar");
    if (mysqli_num_rows($verifica) <= 0) {
        echo "<script language='javascript' type='text/javascript'>
        alert('Login e/ou senha incorretos');window.location
        .href='loginUsuario.php';</script>";
        die();
    } else {
        setcookie("login", $login);
        header("Location:index.php");
    }
}
?>
<html>

<head>
    <title> Login de Usuário </title>
</head>

<body>
    <form method="POST" action="loginUsuario.php">
        <div>
        <label>Login:</label><input type="text" name="login" id="login"><br></label>
        <label>Senha:</label><input type="password" name="senha" id="senha"><br></label>
        <br>
        <a href="cadastroUsuario.php">Cadastre-se</a>
        <br>
        <br>
        <input type="submit" value="entrar" id="entrar" name="entrar"><br>
        </div>
    </form>
</body>

</html>