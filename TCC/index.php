<?php
require_once('menu.php');
?>
<!doctype html>
<html lang="pt-br">
<head>
  <title>Inicio</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="menu.css">
</head>
<body>
<body>
	<div>
    <br><br><br><br>
		<h2> seja bem vindo: 
		<img src="imagens/account.png" width="50" height="50">	
		<?php echo $_SESSION['nome']; ?></h2>
		<script>
			function destroySession() {
				var xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET", "destroy_session.php", true);
				xmlhttp.send();
			}
		</script>
	</div>
</body>
</html>