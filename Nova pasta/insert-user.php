<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Homepage</title>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1 style="text-align: center">Inserir</h1>

	<div class="box">
		<br>

	    <?php include('php/connect.php');

			$sql = "SELECT * FROM tb_user";

			if($lista = $mysqli->query($sql)) {
				?>

				<form method="post" action="php/new-user.php">
					<input id="mail" type="email" required name="email" value="" style="width: 20vw;" placeholder="E-mail"><br>
					<input id="name" type="text" required name="username" value="" style="width: 20vw;" placeholder="Nome de usuário"><br>
					<input id="pass" type="password" min="0" max="16" required name="password" value="" style="width: 20vw;" placeholder="Senha">
					<br><br>

					<input id="submit" type="submit" value="Cadastrar usuário"><br>
				</form>

				<br><a href="index.php">Já tem uma conta? Entre</a><br>

				<?php
			}
		?>

	    <br>
    </div>

    <footer>
 		<p>&copy; 2022 &middot; Solaris &middot; PDTCC</p>
 	</footer>
 	
</body>
</html>