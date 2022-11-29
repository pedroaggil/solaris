<?php include('../php/connect.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Perfil</title>
	<title>Solaris</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Move">
	<!-- equipe Move: Ana Beatriz, Giovanna Biondo, Ian Reyel, Loren Meleti e Pedro Gil -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/235f508f3b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="../css/style-perfil.css">
	<link rel="icon" type="imagem/png" href="../img/icon.png">
	</head>
<body>
	<!-- Navbar -->
	<header class="p-3 mb-3 border-bottom">
    <div class="container">

      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <a class="navbar-brand" href="home-log.php">
        <img src="../img/logo.png"/>
      </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li class="nav-item"><a href="../home-log.php" class="nav-link">Ínicio</a></li>
          <li class="nav-item"><a href="../home-log.php#sobre" class="nav-link">Sobre nós</a></li>
          <li class="nav-item"><a href="../home-log.php#colaboradores" class="nav-link">Colaboradores</a></li>
          <li class="nav-item"><a href="../artigos/exibir_artigos.php" class="nav-link">Artigos</a></li>
          <li class="nav-item"><a href="../calendario/index.php" class="nav-link">Agenda</a></li>
          <?php if ($_SESSION['level'] == 2) { echo '<li class="nav-item"><a href="../admin/index.php" class="nav-link">Admin</a></li>'; } ?>
        </ul>


        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../img/user.png"/>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" name="outin" id="outin" href="../php/logout.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  	</header>
  	<!-- navbar -->
	
	<?php

		$search =  "SELECT * 
					FROM tb_user 
					WHERE cd_user = ". $_SESSION['id'];

		$query = $mysqli->query($search);

		while ($sql = $query->fetch_object()) {
			echo "<div class='container main'<br>";
			echo "<div class='user'>Olá, $sql->ds_username</div>";

		 	if ($sql->ds_tag != null) {
		 		if ($sql->ds_tag == "esp") {
		 			echo "<div class='tag'>Especialista</div>";

		 		} elseif ($sql->ds_tag == "med") {
		 			echo "<div class='tag'>Médico</div>";
				
		 		} elseif ($sql->ds_tag == "pal") {
		 			echo "<div class='tag'>Palestrante</div>";

		 		}
		 	} else {
		 		echo "<br>";
				
		 	}

		 	echo "<br>";
		 	echo "<input type='text' class='valor' readonly value='$sql->ds_username'><br>";
		 	echo "<input type='text' class='valor' readonly value='$sql->ds_email'>

		 	<button class='editar' type='submit' value='#'><a href='editar-perfil.php'class='text-white' style='text-decoration:none;'>Editar</a></button>
		 	</div>";
		 }

	?>
	<div class="title">
  		<h4 style="font-weight: 600;">Seus eventos salvos/</h4>
  		<p>Sou um parágrafo. Clique aqui para editar e adicionar o seu próprio texto</p>
	<?php

		$src__events = "SELECT * 
						FROM tb_agenda 
						WHERE id_salvar = 1";

		$res = $mysqli->query($src__events);

		while ($sql_src = $res -> fetch_object()) {
			?>
		 	<div class="card" style="width: 20rem; margin-top: 3rem;">
		 		<!--<img class="card-img-top" src="..." alt="Card image cap">-->
		 		<div class="card-body">
		 			<h5 class="card-title"><?= $sql_src->dt_data; ?> : <?= $sql_src->hr_hora; ?></h5>
		 			<p class="card-text"><?= $sql_src->ds_endereco; ?>, <?= $sql_src->nm_bairro; ?> - <?= $sql_src->nm_cidade; ?></p>
    				
                      <a href="../php/unsave-lecture.php?event=<?= $sql_src->cd_agenda; ?>" style="text-decoration"><button class="calendar-card">Excluir evento</button></a>
                   
				</div>
		 		</div>
  		 	</div>
		 	<?php 
		}

	 ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>


</body>
</html>