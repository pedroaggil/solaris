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

	<h1 style="text-align: center">Inserir</h1>

	<div class="box">
		<br>

	    <?php 
		include('connect.php'); // Conectando com o banco de dados

		$consulta = "SELECT * FROM tb_user"; // Comando de consulta ao banco de dados
		$result = $mysqli->query($consulta); // Executando o comando de consulta

		while ($row = $result -> fetch_object()) { // Enquanto houverem registros no banco, eles serão exibidos em loop na ordem especificada
			echo "<br>";
			echo "<span id='id'>E-mail</span>: $row->ds_email <br>
				<span id='id'>Nome de usuário</span>: $row->ds_username <br>
				<span id='id'>Senha</span>: $row->ds_senha <br>";
				?>
				<br>
				<a href="delete.php?user=<?php echo "$row->cd_user"; ?>"><img style="width: 2vw; height: 4vh;" src="img/excluir.png" alt="Deletar registro"></a> <!-- Botão de apagar implementado com PHP -->
				<a href="alter.php?user=<?php echo "$row->cd_user"; ?>"><img style="width: 2vw; height: 4vh;" src="img/editar.png" alt="Alterar registro"></a> <!-- Botão de editar implementado com PHP -->
				<?php
			echo "<hr>";
		}

		$mysqli->close(); // Fechando a conexão com o banco de dados
 	?>

	    <br>
    </div>

    <footer>
 		<p>&copy; 2022 &middot; Solaris &middot; PDTCC</p>
 	</footer>

</body>
</html>