<?php
require_once('menuTeste.php');
?>
<!doctype html>
<html lang="pt-br">

<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>

  <div class="wrapper d-flex align-items-stretch">
    <nav id="sidebar">
      <div class="custom-menu">
        <button type="button" id="sidebarCollapse" class="btn btn-primary">
          <i class="fa fa-bars"></i>
          <span class="sr-only">Toggle Menu</span>
        </button>
      </div>
      <h1><a href="index.php" class="logo"><?php echo $_SESSION['nome']; ?></a></h1>
      <ul class="list-unstyled components mb-5">
        <li class="active">
          <a href="index.php">Home</a>
        </li>
        <li>
          <a href="#">Cadastros</a>
        </li>
        <li>
          <a href="#"> Friends</a>
        </li>
        <li>
          <a href="#"> Subcription</a>
        </li>
        <li>
          <a href="#"> Settings</a>
        </li>
        <li>
          <a href="#"> Information</a>
        </li>
      </ul>
    </nav>
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

   <!-- Page Content  -->
   <div id="content" class="p-4 p-md-5 pt-5">
      <h2> seja bem vindo: <?php echo $_SESSION['nome']; ?></h2>
      <script>
        function destroySession() {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.open("GET", "destroy_session.php", true);
          xmlhttp.send();
        }
      </script>
    </div>
  
  </div>
</body>

</html>