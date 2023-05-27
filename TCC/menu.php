<?php
session_start();
if (!isset($_SESSION['nome'])) {
  header('Location: login.php');
  exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="menu.css">
</head>

<body>
  <nav positon="fixed" class="navbar navbar-expand-lg bg-body-tertiary fixed-top p-2 text-dark-emphasis bg-primary-subtle border border-primary-subtle">
    <div class="container-fluid">
      <img src="imagens/logo_Azul.png" alt="B.C Mechanics" width="400" height="110" class="d-inline-block align-text-top">
      <div></div>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <img src="imagens/menu.png" width="10" height="10" class="navbar-toggler-icon"></img>
      </button>
      <div class="offcanvas offcanvas-end bg-body-tertiary text-dark-emphasis bg-primary-subtle border border-dark-subtle" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
            <img src="imagens/menu.png" width="30" height="30" class="navbar-toggler-icon"></img>
            Menu
          </h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="container">
          <ul class="navbar-nav mr-auto">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">
                  <img src="imagens/home.png" width="30" height="30">
                  Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="imagens/edit.png" width="30" height="30">
                  Cadastros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="cadastrarCliente.php">Cliente</a></li>
                  <li><a class="dropdown-item" href="cadastrarFuncionario.php">Funcionario</a></li>
                  <li><a class="dropdown-item" href="cadastrarVeiculo.php">Veiculo</a></li>
                  <li><a class="dropdown-item" href="cadastrarProduto.php">Produto</a></li>
                  <li><a class="dropdown-item" href="cadastrarServico.php">Servico</a></li>
                  <li><a class="dropdown-item" href="cadastrarOficina.php">Oficina</a></li>
                </ul>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="imagens/automobile-with-wrench.png" width="30" height="30">
                  Ordem de Serviço
                </a>
              </li>

              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="imagens/to-do-list.png" width="30" height="30">
                  Relatórios
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="listagemUsuarios.php">Usuários</a></li>
                  <li><a class="dropdown-item" href="ListagemCliente.php">Clientes</a></li>
                  <li><a class="dropdown-item" href="ListagemFuncionario.php">Funcionarios</a></li>
                  <li><a class="dropdown-item" href="ListagemVeiculo.php">Veiculos</a></li>
                  <li><a class="dropdown-item" href="ListagemProduto.php">Produtos</a></li>
                  <li><a class="dropdown-item" href="ListagemServico.php">Servicos</a></li>
                  <li><a class="dropdown-item" href="ListagemOficina.php">Oficinas</a></li>
                  <li><a class="dropdown-item" href="ListagemOrdemServico.php">Ordem de Serviço</a></li>
                </ul>
              </li>
            </ul>
            <div class="dropdown">
              <div class="container d-inline p-2">
                <img src="imagens/account.png" width="50" height="50">
                </div>
                <h3 class="dropdown-toggle d-inline p-2" data-bs-toggle="dropdown" aria-expanded="false">
                  <?php echo $_SESSION['nome'] ?>
                </h3>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="configuracoesUsuario.php" type="button">
                      <img src="imagens/settings.png" width="15" height="15">
                      Configurações</a></li>
                  <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Voce está prestes a sair do sistema, confirma a ação ?')">
                      <img src="imagens/logout.png" width="15" height="15">
                      Sair do Sistema</a></li>
                </ul>
              </div>
            </div>
          </ul>


        </div>
      </div>
  </nav>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </nav>
</body>

</html>