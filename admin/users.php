<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<!-- Bootstrap -->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
		<script src="https://kit.fontawesome.com/235f508f3b.js" crossorigin="anonymous"></script>
		<!-- CSS -->
		<link rel="stylesheet" href="../css/style-home-adm.css" />
		<!-- Favicon -->
		<link rel="icon" type="imagem/png" href="../img/icon.png " />

		<title>Controle de Usuários</title>
	</head>

<body>
	
	<div class="container">
		<div class="row">
			<div class="col-1">
				<span class="negrito">oi</span>
			</div>
			<div class="col-6">
				<span class="negrito">soltera?</span>
			</div>
			<div class="col-5">
				<span class="negrito">linda</span>
			</div>
		</div>
		<?php include '../php/connect.php';

				$search =  "SELECT *
							FROM tb_user
							WHERE nr_nivel = 1";
				$result = $mysqli->query($search);

				while ($row = $result -> fetch_object()) {
					echo "
					<div class='row'>
						<div class='col-5'>
							<span>$row->ds_email</span>
						</div>
						<div class='col-5'>
							<span>$row->ds_username</span>
						</div>
						<div class='col-1'>
							<button id='del' name='id' value='<?= $row->cd_user ?>'><img style='width: 2vw; height: 4vh;' src='../img/excluir.png' alt='Deletar registro'></button>
						</div>
						<div class='col-1'>
							<a href='tag-users.php?user=<?= $row->cd_user; ?>'><img style='width: 2vw; height: 4vh;' src='../img/editar.png' alt='Alterar registro'></a>
						</div>
					</div>
					";
			
				}

			?>
	</div>

</body>
</html>