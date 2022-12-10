<?php include('../php/connect.php');  ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Solaris</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Move">
  <!-- equipe Move: Ana Beatriz, Giovanna Biondo, Ian Reyel, Loren Meleti e Pedro Gil -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/235f508f3b.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
  <link rel="stylesheet" type="text/css" href="../css/style-home-calendario.css">
  
  <!-- Swiper CSS-->
  <link rel="stylesheet" href="../css/swiper-bundle.min.css">
  
  <link rel="icon" type="imagem/png" href="../img/icon.png">
</head>
<body>
 <!-- navbar -->
  <header class="p-3 mb-3 border-bottom">
    <div class="containers">

      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <a class="navbar-brand" href="../home-nolog.html">
        <img src="../img/logo.png"/>
      </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li class="nav-item"><a href="../home-nolog.php" class="nav-link">Ínicio</a></li>
          <li class="nav-item"><a href="../home-nolog.php#sobre" class="nav-link">Sobre nós</a></li>
          <li class="nav-item"><a href="../home-nolog.php#colaboradores" class="nav-link">Colaboradores</a></li>
          <li class="nav-item"><a href="../artigos/exibir_artigos.php" class="nav-link">Artigos</a></li>
          <li class="nav-item"><a href="index.php" class="nav-link">Agenda</a></li>
        </ul>


        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../img/user.png"/>
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="../login/index.html">Entrar</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- navbar -->

  <!-- título -->
  <div class="title">
  	<h4 style="font-weight: 600;">Agenda da ONG/</h4>
  	<p>Sou um parágrafo. Clique aqui para editar e adicionar o seu próprio texto</p>
  	<hr class="divider">
  </div>
  <!-- título -->
   <!-- públicos -->
   <div class="pub">
  	<h4>Eventos públicos</h4>
      <div class="container swiper">
      <div class="slide-container">
        <div class="card-wrapper swiper-wrapper">
      <?php 

        $search =  "SELECT * 
                    FROM tb_agenda 
                    WHERE st_publica = 1
                    ORDER BY dt_data ASC";
        
        $query = $mysqli->query($search);

        while ($sql = $query -> fetch_object()) {
          ?>
          <div class="card swiper-slide" style="width:20rem;margin-bottom:3rem;margin-right:1.5rem;align-itemns:center;justify-content:center;">
              <div class="img-box">
                <img src="../img/verao.jpg">
              </div>
              <div class="profile-details">
                 <p style="font-weight:bold">Insere aqui o php do titulo obg<p>
                  <div class="info">
                    <?php
                      echo '['. $sql->dt_data .' : '. $sql->hr_hora .'] '. $sql->ds_endereco .', '. $sql->nm_bairro .' - '. $sql->nm_cidade;
                    ?>
                  </div>
                  <?php 

                    if (isset($_SESSION['id'])) {
                      echo '<div><a href="../php/save-lecture.php?event='. $sql->cd_agenda .'"><button class="salvar-ev"style="text-decoration:none;">Salve este evento no perfil</button></a></div>';

                    }

                  ?>
              </div>
         </div>
          <?php
        }
      
      ?>
      </div>
      </div>
        <div class="swiper-button-next swiper-navBtn" style="color:#000;"></div>
      	<div class="swiper-button-prev swiper-navBtn" style="color:#000;"></div>
      	<div class="swiper-pagination" style="color:#000;"></div>
      </div>
      <br>

  	<h4>Agende um evento você mesmo</h4>
  	
  	<hr class="divider">
        <h5 class="agende"><i class="bi bi-pencil-square"></i>Palestras gratuitas<button><a href="calendario.php" class="agendar text-decoration-none text-white">Agendar</a></button></h5>
    <hr class="divider">
  </div>
  <!-- públicos -->

  <!-- footer -->
  <!-- <div class="footer">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
    <div class="col-md-12 d-flex align-items-center">
      <a class="insta text-muted" style="margin-left: 56rem;" href="https://instagram.com/solarisccp?igshid=YmMyMTA2M2Y="><svg class="bi" width="8" height="8"><i class="bi bi-instagram"></i></a>
      <a class="git text-muted" href="#"><svg class="bi" width="8" height="8"><i class="bi bi-github"></i></a>
      <a class="linke text-muted" href="#"><svg class="bi" width="8" height="8"><i class="bi bi-linkedin"></i></a>
    </div>
    &nbsp;
    <div class="col-md-12 d-flex align-items-center">
      <span class="text-muted">solarisccp@gmail.com | &copy; 2022 | Move - ONG Contra o câncer de pele</span><br>
    </div>
  </footer>
  </div> -->
  <!-- footer -->
  
 <!-- Swiper js-->
 <link rel="stylesheet" href="../js/swiper-bundle.min.js">
 <script src="../js/script.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</body>
</html>