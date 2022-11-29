<?php include('../php/connect.php'); if ($_SESSION['level'] == 2) { ?>
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
		<link rel="stylesheet" href="../css/style-adm-user.css" />
		<!-- Favicon -->
		<link rel="icon" type="imagem/png" href="../img/icon.png " />

		<title>Controle de Usuários</title>
	</head>

<body>
<header class="p-3 mb-3 border-bottom">
            <div class="container">

              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

              <a class="navbar-brand" href="index.html">
                <img src="../img/logo.png"/>
              </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li class="nav-item"><a href="../home-log.php" class="nav-link">Ínicio</a></li>
                  <li class="nav-item"><a href="../home-log.php#sobre" class="nav-link">Sobre nós</a></li>
                  <li class="nav-item"><a href="../home-log.php#colaboradores" class="nav-link">Colaboradores</a></li>
                  <li class="nav-item"><a href="../artigos/exibir_artigos.php" class="nav-link">Artigos</a></li>
                  <li class="nav-item"><a href="../calendario/index.php" class="nav-link">Agenda</a></li>
                  <li class="nav-item"><a href="index.php" class="nav-link">Admin</a></li>
                </ul>


                <div class="dropdown text-end">
                  <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../img/user.png"/>
                  </a>
                  <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="../php/logout.php">Sair</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </header>

<main>
	<div class="box">
		<h3>Controle de Usuários</h3>
		<div class="arrumar">
	<div class="container">
		<div class="row">
			<div class="comunista col-3">
				<span class="negrito">Nome</span>
			</div>
			<div class="col-1"></div>
			<div class="col-4">
				<span class="negrito" style="margin: 0  0 400px 0;">Email</span>
			</div>
			<div class="col-2 colunalink">
				<a href='../php/create-user.php'><img style='width: 30px; height: 30px; background-color:#F2955E; border-radius:3rem;' src='../img/mais.png' alt='Alterar registro'></a></div>
			</div>
		</div>
	</div>
	<?php 

$search =  "SELECT *
            FROM tb_user
            WHERE nr_nivel = 1";
$result = $mysqli->query($search);

while ($row = $result -> fetch_object()) {
    echo "
    <div class='arrumar2'>
        <div class='row'>
            <div class='col-3'>
                <span>$row->ds_username</span>
            </div>	
            <div class='col-1'>
            </div>
            <div class='col-4'>
                <span>$row->ds_email</span>
            </div>
        
            <div class='col-1'>
                <button><a href='../php/delete-user.php?user=$row->cd_user'><img style='width: 20px; height: 20px;' src='../img/excluir.png' alt='Deletar registro'></a></button>
            </div>
            <div class='col-1'>
                <button><a href='tag-users.php?user=$row->cd_user'><img style='width: 20px; height: 20px;' src='../img/editar.png' alt='Alterar registro'></a></button>
            </div>
        </div>
    </div>
    ";				
}
?> 
</div>
</main>
<br>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>
<?php } else { header('Location: ../index.php'); } ?>