<?php require_once("menu.php");
// conectar no banco de dados
$conexao = mysqli_connect('127.0.0.1', 'root', '', 'tcc');
// conectar no banco de dados
if (isset($_POST['alterar'])) {

  // pega dados do formulario
  $nome = $_POST['nome'];
  $sexo = $_POST['sexo'];
  $email = $_POST['email'];
  $foto = $_POST['foto'];
  $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT); // criptografa a senha

  if (isset($_POST['enviar'])) {

    $diretoria = "uploads/";
    $arquivoLocal = $_FILES['foto']['tmp_name'];
    $arquivoDestino = $diretoria . $_FILES['foto']['name'];

    if (move_uploaded_file($arquivoLocal, $arquivoDestino)) {
      echo "Arquivo enviado com sucesso. ";
    } else {
      echo "Erro ao enviar arquivo. ";
    }
  }
  // Inserir os dados no banco de dados
  $sql = " UPDATE usuario (nome, email, sexo, senha, foto)
   VALUES ('{$nome}', '{$email}', '{$sexo}','{$senha}', '{$foto}')";
  mysqli_query($conexao, $sql);

  mysqli_close($conexao); // fecha conexao
  $mensagem = "Inserido com sucesso";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Configurações</title>
</head>

<body>
  <?php
  if (isset($mensagem)) :
    echo "
        <div class=\"alert alert-success\" role=\"alert\">
        $mensagem
        </div>";
  endif;
  ?>
  <div class="container">
    <form method=POST class="formLogin">
      <br><br><br><br>
      <h1>Configurações de Usuario</h1>
      <label for="nome">Foto:</label>
      <input type="file" class="form-control" name="foto" id="foto">
      <br />
      <label for="nome">Nome</label>
      <input name="nome" type="nome" class="form-control" id="nome" aria-describedby="email" placeholder="Digite seu nome">
      <br />
      <label for="sexo">sexo</label>
      <br />
      <select name="sexo" id="sexo" class="form-control" aria-label="Default select example">
        <option selected>Selecione o Sexo</option>
        <option value="M">masculino</option>
        <option value="F">feminino</option>
        <option value="O">outros</option>
      </select>
      <br />
      <label for="email">Email</label>
      <input name="email" type="email" class="form-control" id="email" aria-describedby="email" placeholder="Digite seu email">
      <br />
      <div class="form-group">
        <label for="senha">Nova Senha</label>
        <input name="senha" type="password" class="form-control" id="senha" placeholder="Digite sua senha">
        <br>
        <button name="alterar" type="submit" class="btn btn-primary">Alterar</button>
        <a href="index.php" onclick="return confirm('confirme a ação ?')">
          <button type="button" class="btn btn-dark">Cancelar</button></a>
      </div>
    </form>
  </div>
</body>

</html>