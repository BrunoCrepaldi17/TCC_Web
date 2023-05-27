<?php

if (isset($_POST['cadastrar'])) {
    // conectar no banco de dados
    $conexao = mysqli_connect('127.0.0.1', 'root', '', 'web2');

    // pega dados do formulario
    $statusCli = $_POST['statusCli'];
    $nome = $_POST['nome'];
    $dataNasc = $_POST['dataNasc'];
    $cpf = $_POST['cpf'];
    $rg = $_POST['rg'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $endereco = $_POST['endereco'];
    $obs = $_POST['obs'];

    // SQL linguagem para manipular banco de dados
    $sql = "INSERT INTO cliente ( statusCli, nome, dataNasc, cpf, rg, email, telefone, estado, cidade, endereco, obs)
    VALUES ('{$statusCli}', '{$nome}', '{$dataNasc}', '{$cpf}', '{$rg}', '{$email}', '{$telefone}', '{$estado}', '{$cidade}', '{$endereco}', '{$obs}')";
    mysqli_query($conexao, $sql);

    mysqli_close($conexao);
    $mensagem = "Inserido com sucesso";
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Cliente</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="vstack gap-3">
        <div class="container p-5">
            <?php require_once('menu.php'); ?>
        </div>
        <div class="container p-2">
            <form class="row gx-3">
                <h1>Cadastro de Clientes</h1>
                <div class="container">
                    <div class="row g-3">
                        <div class="col-md-4">
                            <label for="status" class="form-label">Status:</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="A">
                                <label class="form-check-label" for="inlineRadio1">Ativo</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="I">
                                <label class="form-check-label" for="inlineRadio2">Inativo</label>
                            </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row g-2">
                        <div class="col-md-4">
                            <label for="nome" class="form-label">Nome:</label>
                            <input type="text" id="nome" class="form-control" name="nome" required placeholder="Digite seu nome:">
                        </div>
                        <div class="col-md-2">
                            <label for="data_nascimento" class="form-label">Data de Nascimento:</label>
                            <input type="date" id="dataNasc" class="form-control" name="dataNasc" required><br><br>
                        </div>
                        <div class="col-md-3">
                            <label for="cpf" class="form-label">CPF:</label>
                            <input type="text" id="cpf" class="form-control" name="cpf" required placeholder="Digite seu CPF:"><br><br>
                        </div>
                        <div class="col-md-3">
                            <label for="rg" class="form-label">RG:</label>
                            <input type="text" id="rg" class="form-control" name="rg" required placeholder="Digite seu RG:"><br><br>
                        </div>
                    </div>

                    <div class="row g-5">
                        <div class="col-md-6">
                            <label for="email" class="form-label">Email:</label>
                            <input type="email" id="email" class="form-control" name="email" required placeholder="Digite seu email:"><br><br>
                        </div>
                        <div class="col-md-6">
                            <label for="telefone" class="form-label">Telefone:</label>
                            <input type="tel" id="telefone" class="form-control" name="telefone" required placeholder="Digite seu telefone:"><br><br>
                        </div>
                    </div>

                    <div class="row g-2">
                        <div class="col-md-4">
                            <label for="estado" class="form-label">Estado:</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Selecione o estado:</option>
                                <option value="1">Paraná</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label for="cidade" class="form-label">Cidade:</label>
                            <input type="text" id="cidade" class="form-control" name="cidade" required placeholder="Digite sua cidade:"><br><br>
                        </div>
                        <div class="col-md-4">
                            <label for="endereco" class="form-label">Endereço:</label>
                            <input type="text" id="endereco" class="form-control" name="endereco" required placeholder="Digite seu endereço:"><br><br>
                        </div>
                    </div>

                    <div class="row g-3">
                        <div class="col-md-8">
                            <label for="obs" class="form-label">Observações:</label><br>
                            <textarea id="obs" name="obs" class="form-control" rows="4" cols="50" placeholder="Digite as observaçães:"></textarea><br><br>
                        </div>
                    </div>

                    <div class="row g-5">
                        <div class="col-md-1">
                            <a href="cadastrarCliente.php" onclick="return confirm('confirme a ação ?')">
                                <button id="cadastrar" name="cadastrar" type="button" class="btn btn-primary">Cadastrar</button>
                            </a>
                        </div>

                        <div class="col-md-1">
                            <a href="index.php" onclick="return confirm('Você vai retornar ao menu principal, confirme a ação ?')">
                                <button type="button" class="btn btn-danger">Cancelar</button></a>
                            </a>
                        </div>
                    </div>
                    <br><br><br>
                </div>
            </form>
        </div>
    </div>
</body>

</html>