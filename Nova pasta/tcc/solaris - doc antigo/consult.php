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
	<script src="js/jquery-3.6.1.js"></script>

	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

	<h1 style="text-align: center">Inserir</h1>

	<a href="insert-user.php" style="text-align: center;">
		<img style="width: 3vw; height: 6vh; margin: 0 auto;" src="img/add.png">
		<span id="insert">Inserir novo registro</span>
	</a>

	<br><hr><br>

	<div class="box">
		<br>

	    <?php 
		include('php/connect.php'); // Conectando com o banco de dados

		$consulta = "SELECT * FROM tb_user WHERE nr_nivel = 1"; // Comando de consulta ao banco de dados
		$result = $mysqli->query($consulta); // Executando o comando de consulta

		while ($row = $result -> fetch_object()) { // Enquanto houverem registros no banco, eles serão exibidos em loop na ordem especificada

			$id = $row->cd_user;
			$title = $row->ds_username;
			$table = 'tb_user';

			echo "<br>";
			echo "<span>E-mail</span>: $row->ds_email <br>
				<span>Nome de usuário</span>: $row->ds_username <br>"
				?>
				<br>
				<button id="del" name="id" value="<?= $row->cd_user ?>"><img style="width: 2vw; height: 4vh;" src="img/excluir.png" alt="Deletar registro"></button> <!-- Botão de apagar implementado com PHP -->
				<a href="tag-users.php?user=<?php echo "$row->cd_user"; ?>"><img style="width: 2vw; height: 4vh;" src="img/editar.png" alt="Alterar registro"></a> <!-- Botão de editar implementado com PHP -->
				<a href="profile.php?user=<?php echo "$row->cd_user"; ?>"><img style="width: 2vw; height: 4vh;" src="img/perfil.png" alt="Perfil do usuário"></a> <!-- Botão de apagar implementado com PHP -->
				<?php
			echo "<hr>";

			}

		$mysqli->close(); // Fechando a conexão com o banco de dados
 	?>

	    <br><a style="text-align: center;" href="javascript:history.go(-1)">Voltar</a><br><br>
    </div>

    <footer>
 		<p>&copy; 2022 &middot; Solaris &middot; PDTCC</p>
 	</footer>

 	<script src="js/delete-user.js"></script>
</body>
</html>