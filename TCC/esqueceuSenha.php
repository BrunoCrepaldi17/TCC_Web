<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Verifique se o formulário de recuperação de senha foi enviado

    $email = $_POST['email'];

    // Verifique se o e-mail existe no banco de dados
    // Código para verificar se o e-mail existe no banco de dados

    // Gere um código de verificação aleatório
    $codigo_verificacao = generateVerificationCode(); // Função fictícia para gerar um código de verificação

    // Salve o código de verificação no banco de dados
    // Código para salvar o código de verificação no banco de dados

    // Envie o e-mail com o código de verificação
    $assunto = 'Recuperação de Senha';
    $mensagem = 'Seu código de verificação é: ' . $codigo_verificacao;
    $headers = 'From: ' . $email;

    if (mail($email, $assunto, $mensagem, $headers)) {
        // O e-mail foi enviado com sucesso
        echo 'Um e-mail com o código de verificação foi enviado para o seu endereço de e-mail. Por favor, verifique sua caixa de entrada.';
    } else {
        // Ocorreu um erro ao enviar o e-mail
        echo 'Ocorreu um erro ao enviar o e-mail. Por favor, tente novamente mais tarde.';
    }
}

function generateVerificationCode() {
    // Função fictícia para gerar um código de verificação aleatório
    return mt_rand(100000, 999999);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <title>Tela de Login no Sistema</title>
</head>

<body>

<div class="container">
    <h1>Recuperação de Conta</h1>
<!-- Formulário de recuperação de senha -->
<form method="POST" action="">
    <label for="email">E-mail:</label>
    <input type="email" id="email" name="email" required>
    <button type="submit">Recuperar Conta</button>
  </div>  
</form>
</body>
</html>