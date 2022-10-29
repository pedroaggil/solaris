<?php 
  //if (isset($_SESSION['level']) && $_SESSION['level'] == 2) {
    ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta name="author" content="Move">
<!-- equipe Move: Ana Beatriz, Giovanna Biondo, Ian Reyel, Loren Meleti e Pedro Gil -->
<!-- Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/235f508f3b.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
<link rel="stylesheet" type="text/css" href="css/style-inicial.css">
<script src="https://kit.fontawesome.com/235f508f3b.js" crossorigin="anonymous"></script>

<link rel="stylesheet" href="../css/style-home-adm.css" />
<link rel="icon" type="imagem/png" href="../img/icon.png " />
<title>Administração Solaris</title>
</head>
    <body>
          <!-- Navbar -->
          <header class="p-3 mb-3 border-bottom">
            <div class="container">

              <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

              <a class="navbar-brand" href="index.html">
                <img src="../img/logo.png"/>
              </a>

                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                  <li class="nav-item"><a href="../home-log.php" class="nav-link">Ínicio</a></li>
                  <li class="nav-item"><a href="../home-log.php #sobre " class="nav-link">Sobre nós</a></li>
                  <li class="nav-item"><a href="../home-log.php #colaboradores" class="nav-link">Colaboradores</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Artigos</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Fórum</a></li>
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
        <div class="logo">
        <img src="../img/icon.png" alt="easyclass" />
        </div>
        <h1>Bem-vindo administrador</h1>
            <div class="container">
                <div class="row">
                    <div class="col-2">
                        <button><a href="users.php" class="text-white">Usuários</a></button>
                    </div>
                    <div class="col-2">
                        <button><a href="new-admin.html" class="text-white">Novo ADM</a></button>
                    </div>
                    <div class="col-2">
                        <button> <a href="#" class="text-white">Artigos</a></button>
                    </div>
                    <div class="col-2">
                        <button> <a href="#" class="text-white">Publicar artigo</a></button>  
                    </div>
                </div> 

            <div class="row">
                <div class="col-2 " >
                   <button><a href="#" class="text-white">Palestras</a></button>
                </div>
                <div class="col-2">
                    <button> <a href="#" class="text-white">Palestras públicas</a></button>
                </div>
                <div class="col-2">
                    <button> <a href="#" class="text-white">Agendar palestra</a></button>
                </div>
                <div class="col-2">
                    <button> <a href="#" class="text-white">Colaboradores</a></button>
                </div>
            </div>
            </div>
    </div>
    </main>

     <!-- footer -->
    <div class="footer">
    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4">
      &nbsp;
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
    </div>
    <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    </body>
</html>
    <?php

 /* } else {
    header('Location: ../index.php');
    
  }*/
?>