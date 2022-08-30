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

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1 style="text-align: center;">a</h1>

	<div class="box">
		<?php include('connect.php');

			$search = "SELECT * FROM tb_user WHERE cd_user = " . $_GET['user'];
			$result = $mysqli->query($search);

			while ($row = $result -> fetch_object()) {
				echo "<br>
					<form action='tag-include.php' method='post'>
						<input type='text' readonly name='username' value='$row->ds_username'>
						<input type='email' readonly name='mail' value='$row->ds_email'><br>

						<h4>Dar um título</h4><hr>
						<input type='radio' value='esp' name='tag' id='especialista'> Especialista
						<input type='radio' value='med' name='tag' id='medico'> Médico
						<input type='radio' value='pal' name='tag' id='palestrante'> Palestrante

						<br><br>

						<input type='submit' value='Salvar'>
						<hr>
					</form>
				";
			}

		 ?>

		<br><a style="text-align: center;" href="javascript:history.go(-1)">Voltar</a><br><br>
	</div>

	<footer>
 		<p>&copy; 2022 &middot; Solaris &middot; PDTCC</p>
 	</footer>
</body>
</html>