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
  <nav class="navbar bg-body-tertiary fixed-top p-2 text-dark-emphasis bg-primary-subtle border border-primary-subtle">
    <div class="container-fluid">
      <img src="imagens/logo_Azul.png" alt="B.C Mechanics" width="400" height="110" class="d-inline-block align-text-top">
      <h3 class="">Seja Bem Vindo: <?php echo $_SESSION['nome'] ?></h3>
      <li class="nav-item dropdown">
        <h5 class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Opções
</h5>
        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Configurações</a></li>
          <li><a class="dropdown-item" href="logout.php" onclick="return confirm('Voce está prestes a sair do sistema, confirma a ação ?')">Sair do Sistema</a></li>
        </ul>
      </li>

      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="offcanvas offcanvas-end bg-body-tertiary text-dark-emphasis bg-primary-subtle border border-dark-subtle" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <img src="imagens/Logo_Tcc_semFundo.png" alt="B.C Mechanics" width="250" height="250" class="d-inline-block align-text-top">
        <a class="navbar-brand" href=""></a>
        <div class="container">
          <ul class="navbar-nav mr-auto">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="inicio.php">Inicio</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Cadastros
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="usuarioCadastrar.php">Usuário</a></li>
                  <li><a class="dropdown-item" href="grupoUsuarioCadastrar.php">Grupo Usuario</a></li>
                  <li><a class="dropdown-item" href="produtosCadastrar.php">Produto</a></li>
                  <li><a class="dropdown-item" href="EstadoCadastrar.php">Estado</a></li>
                  <li><a class="dropdown-item" href="clienteCadastrar.php">Cliente</a></li>
                  <li><a class="dropdown-item" href="CatProdutoCadastrar.php">Categoria de Produtos</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Listagens
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="listagemUsuarios.php">Usuários</a></li>
                  <li><a class="dropdown-item" href="GrupoUsuariosListar.php">Grupo Usuarios</a></li>
                  <li><a class="dropdown-item" href="ProdutosListar.php">Produtos</a></li>
                  <li><a class="dropdown-item" href="ClienteListar.php">Clientes</a></li>
                  <li><a class="dropdown-item" href="EstadoListar.php">Estado</a></li>
                  <li><a class="dropdown-item" href="CatProdutoListar.php">Categoria de Produtos</a></li>
                </ul>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ordem de Serviço
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="listagemUsuarios.php">Usuários</a></li>
                  <li><a class="dropdown-item" href="GrupoUsuariosListar.php">Grupo Usuarios</a></li>
                  <li><a class="dropdown-item" href="ProdutosListar.php">Produtos</a></li>
                  <li><a class="dropdown-item" href="ClienteListar.php">Clientes</a></li>
                  <li><a class="dropdown-item" href="EstadoListar.php">Estado</a></li>
                  <li><a class="dropdown-item" href="CatProdutoListar.php">Categoria de Produtos</a></li>
                </ul>
            </ul>
            </li>
        </div>
      </div>
  </nav>
  <nav class="navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
    </div>
  </nav>
</body>

</html>