<?php include('../php/connect.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Editar perfil</title>
	<title>Solaris</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="Move">
	<!-- equipe Move: Ana Beatriz, Giovanna Biondo, Ian Reyel, Loren Meleti e Pedro Gil -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
	<script src="https://kit.fontawesome.com/235f508f3b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	<link rel="stylesheet" type="text/css" href="../css/style-redefinir-perfil.css">
	<link rel="icon" type="imagem/png" href="../img/icon.png">
	</head>
<body>
	<!-- Navbar -->
	<header class="p-3 mb-3 border-bottom">
    <div class="container">

      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <a class="navbar-brand" href="../home-log.php">
        <img src="../img/logo.png"/>
      </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li class="nav-item"><a href="../home-log.php" class="nav-link">Ínicio</a></li>
          <li class="nav-item"><a href="../home-log.php#sobre" class="nav-link">Sobre nós</a></li>
          <li class="nav-item"><a href="../home-log.php#colaboradores" class="nav-link">Colaboradores</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Artigos</a></li>
          <li class="nav-item"><a href="../calendario/index.php" class="nav-link">Agenda</a></li>
          <?php if ($_SESSION['level'] == 2) { echo '<li class="nav-item"><a href="admin/index.php" class="nav-link">Admin</a></li>'; } ?>
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

		$search = "SELECT * FROM tb_user WHERE cd_user = ". $_SESSION['id'];
		$result = $mysqli->query($search);

		while ($row = $result -> fetch_object()) {
			echo "<div class='container main'<br>";
			echo '<form method="post" enctype="multipart/form-data" action="../php/update-user.php">';
			echo "<div class='user'>Olá, $row->ds_username</div>";

			if ($row->ds_tag != null) {
                  if ($row->ds_tag == "esp") {
                      echo "<div class='tag'>Especialista</div>";

                  } elseif ($row->ds_tag == "med") {
                      echo "<div class='tag'>Médico</div>";

                  } elseif ($row->ds_tag == "pal") {
                      echo "<div class='tag'>Palestrante</div>";}
			} else {
				echo "<br>";}
          

			echo "<br>";
			echo "<input name='id' type='hidden' class='valor' value='$row->cd_user'><br>";
			// echo '<label for="image">      Logo</label><br>';
			// echo "<input name='image' id='image' type='file' accept='image/png, image/jpg, image/jpeg' class='valor'><br>";
			echo "<input name='name' type='text' class='valor' value='$row->ds_username'><br>";
			echo "<input name='mail' type='text' class='valor' value='$row->ds_email'>";
            echo "<input name='pass' type='text' class='valor' placeholder='Confirme sua senha'>";
            echo "<input name='new__pass' type='text' class='valor' placeholder='Digite uma nova senha'>

				<button class='editar' type='submit' value='Salvar'>Salvar</button> 
			</div>";
			echo '</form>';
		}

	 ?>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>


</body>
</html>