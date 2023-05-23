<?php
session_start();
if (!isset($_SESSION['nome'])) {
    header('Location: login.php');
    exit;
}
?>
<nav class="navbar bg-dark" data-bs-theme="dark">
    <a class="navbar-brand" href=""></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <img src="imagens/logo_Azul.png" alt="B.C Mechanics" width="500" height="120" class="d-inline-block align-text-top">
    <h2 class="nav-link active">Seja Bem Vindo: <?php echo $_SESSION['nome'] ?></h2>
    <div>
        <a href="logout.php" onclick="return confirm('Voce está prestes a sair do sistema, confirma a ação ?')">
            <button class="btn btn-danger" type="button">Sair do Sistema</button>
        </a>
    </div>
</nav>