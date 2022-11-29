<?php include('../php/connect.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Comprovante de palestra</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Move">
  <!-- equipe Move: Ana Beatriz, Giovanna Biondo, Ian Reyel, Loren Meleti e Pedro Gil -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/235f508f3b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../css/style-session.css">
  <link rel="icon" type="imagem/png" href="../img/icon.png">
</head>
<body>
    <!-- Navbar -->
  <header class="mb-3 border-bottom">
    <div class="container">

      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <a class="navbar-brand" href="#">
        <img src="../img/logo.png"/>
      </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li class="nav-item"><a href="../home-log.php" class="nav-link">Ínicio</a></li>
          <li class="nav-item"><a href="../home-log.php#sobre" class="nav-link">Sobre nós</a></li>
          <li class="nav-item"><a href="../home-logo.php#colaboradores" class="nav-link">Colaboradores</a></li>
          <li class="nav-item"><a href="../artigos/exibir_artigos.php" class="nav-link">Artigos</a></li>
          <li class="nav-item"><a href="../calendario/index.php" class="nav-link">Agenda</a></li>
          <?php if ($_SESSION['level'] == 2) { echo '<li class="nav-item"><a href="admin/index.php" class="nav-link">Admin</a></li>'; } ?>
        </ul>


        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../img/user.png"/>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../perfil/profile.php">Meu perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" name="outin" id="outin" href="php/logout.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- navbar -->
  
  <main>
  <div class="box">
        <h3>Palestra solicitada com sucesso!</h3>
    	<span>Em breve seu evento ficará visível em seu perfil.</span> 
        <div style="margin-left:9rem; font-size:1rem;">Confira as informações preenchidas.</div>
        <div class="infos">
  <?php include_once("connect.php");

  $_SESSION['tel'] = $_POST['tel'];
  $_SESSION['cidade'] = $_POST['cidade'];
  $_SESSION['bairro'] = $_POST['bairro'];
  $_SESSION['endereco'] = $_POST['endereco'];
  $_SESSION['data'] = $_POST['data'];
  $_SESSION['horario'] = $_POST['horario'];

  $tel = $_SESSION['tel'];
  $cidade = $_SESSION['cidade'];
  $bairro = $_SESSION['bairro'];
  $endereco = $_SESSION['endereco']; 
  $data = $_SESSION['data']; 
  $horario = $_SESSION['horario'];
  $mail = $_POST['email'];

  //pendente ou definitivo, banco de dados, salvar data
  //SELECT * FROM tb_usuario where cd_usuario = informação da sessão

  $sql = "INSERT INTO tb_agenda (cd_agenda, ds_email, nr_tel, hr_hora, dt_data, ds_endereco, nm_bairro, nm_cidade, st_publica, st_aprovada, id_salvar)
          VALUES (null, '".$mail."', '".$tel."', '" .$horario. "', '" .$data. "', '" .$endereco. "', '" .$bairro. "', '" .$cidade. "', 0, 0, 0)";

  if ( mysqli_query ( $mysqli, $sql )) {
    	echo "Data:&nbsp &nbsp" . $data . "<br>";
        echo "Horário:&nbsp &nbsp" . $horario . "<br>";
    	echo "Telefone:&nbsp &nbsp" . $tel . "<br>";
    	echo "Endereço:&nbsp &nbsp" . $endereco . "<br>";
    	echo "Cidade:&nbsp &nbsp" . $cidade . "<br>";
    	echo "Bairro:&nbsp &nbsp" . $bairro . "<br>";
        
  } else {  
        echo "Erro: " . $sql . "<br>" . mysqli_error ( $mysqli ) ; 
  }
  mysqli_close ( $mysqli ) ;



  ?>
  </div>
  <a href='javascript:history.go(-1)'><button style="font-family: Poppins; font-size: 16px; text-decoration:none;">Voltar</button></a>
  </div>
  </main>
  </body>
  
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</html>