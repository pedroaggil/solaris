<?php include 'php/connect.php';
  if (isset($_SESSION['id'])) {
?>

<!DOCTYPE html>
<html>
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
  <link rel="stylesheet" type="text/css" href="css/style-inicial.css">
  <link rel="icon" type="imagem/png" href="img/icon.png">
</head>
<body>

  <!-- Navbar -->
  <header class="p-3 mb-3 border-bottom">
    <div class="container">

      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

      <a class="navbar-brand" href="home-log.html">
        <img src="img/logo.png"/>
      </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li class="nav-item"><a href="home-log.html" class="nav-link">Ínicio</a></li>
          <li class="nav-item"><a href="#sobre" class="nav-link">Sobre nós</a></li>
          <li class="nav-item"><a href="#colaboradores" class="nav-link">Colaboradores</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Artigos</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Fórum</a></li>
          <li class="nav-item"><a href="calendário/index.html" class="nav-link">Agenda</a></li>
        </ul>


        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="img/user.png"/>
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="perfil/perfil.html">Meu perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" name="outin" id="outin" href="home-nolog.html">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- navbar -->

  <!-- carrossel -->
  <div class="teste">
  <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container">
          <div class="carousel-img"> 
            <a href="https://instagram.com/solarisccp?igshid=YmMyMTA2M2Y="><img src="img/banner3.jpg"></a>
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="container">
          <div class="carousel-img">
            <img src="img/banner2.jpg">
          </div>
        </div>
      </div>

      <div class="carousel-item">
        <div class="container">
          <div class="carousel-img">
            <img src="img/banner.jpg">
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden"></span>
    </button>
  </div>
  </div>
  <!-- carrossel -->


  <!-- icons -->
  <div class="container marketing">

    <div class="row">
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img"preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <h2 class="fw-normal">Heading</h2>
        <p>Some representative placeholder content for the three columns of text below the carousel. This is the first column.</p>
      </div>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img"preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>

        <h2 class="fw-normal">Heading</h2>
        <p>Another exciting bit of representative placeholder content. This time, we've moved on to the second column.</p>
      </div>
      <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" role="img"preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <h2 class="fw-normal">Heading</h2>
        <p>And lastly this, the third column of representative placeholder content.</p>
      </div>
    </div>
    <hr class="divider">

    <div class="espaço1"></div>

    <!-- nos conheça -->
    <div class="row featurette" id="sobre">
        <div class="col-md-7">
          <h2 class="featurette-heading"><a class="logo"><img src="img/s.png"/></a>&nbsp;Nos conheça mais</h2>
          <h3 class="sub"><span class="text-muted">Entenda qual o motivo do projeto Solaris</span></h3>
          <p class="lead">Nossa maior motivação para criá-lo foi a consciência de que boa parte da população, que está cotidianamente exposta ao sol, não possui conhecimento acerca do câncer de pele e nem como evitá-lo, contribuindo para o aumento do índice anual no país.
          <br><br>
          Sendo assim, nosso objetivo principal é promover o tema e torná-lo conhecido, quebrando os "tabus" a respeito do câncer. Para além, esperamos que vínculos sejam estabelecidos entre os que desejam compartilhar suas histórias e os que buscam entender mais sobre o câncer de pele!
          </p>
        </div>
        <div class="col-md-5">
          <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#eee"/><text x="50%" y="50%" fill="#aaa" dy=".3em">500x500</text></svg>
        </div>
      </div>
    <!-- nos conheça -->
    <hr class="divider">
    </div>
    <!-- icons -->

    <div class="espaço"></div>

    <!-- cards -->
    <div class="container px-4 py-5" id="custom-cards">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <a href="#" class="card-link">
        <div class="card-img-hover"></div>
        </a>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('img/verao.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Short title, long jacket</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="img/icon.png" alt="Solaris" width="34" height="34" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <a href="" class="text-white"><i class="bi bi-instagram" width="1em" height="1em"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <a href="#" class="card-link">
        <div class="card-img-hover"></div>
        </a>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('img/solaris.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Much longer title that wraps to multiple lines</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="img/icon.png" alt="Solaris" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <a href="https://www.instagram.com/p/CiAq11pOYGd/?utm_source=ig_web_copy_link" class="text-white"><i class="bi bi-instagram" width="1em" height="1em"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <a href="#" class="card-link">
        <div class="card-img-hover"></div>
        </a>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('img/sinais.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Another longer title belongs here</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="img/icon.png" alt="Solaris" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <a href="#" class="text-white"><i class="bi bi-instagram" width="1em" height="1em"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cards -->

  <!-- colaboradores -->
  <div class="colab" id="colaboradores">
    
  </div>
  <!-- colaboradores -->

  <!-- contato -->
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3">Vertically centered hero sign-up form</h1>
        <p class="col-lg-10 fs-4">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-light">
          <div class="form-floating mb-3">
            <input type="text" class="form-control" id="floatingInput" placeholder="Insira seu nome">
            <label for="floatingInput">Nome</label>
          </div>
          <div class="form-floating mb-3">
            <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">E-mail</label>
          </div>
          <div class="form-floating mb-3">
            <textarea placeholder="Escreva sua mensagem" class="form-control" rows="4" cols="50"></textarea>
            <label for="floatingText">Mensagem</label>
          </div>
          <hr class="my-4">
          <div class="enviar"><button name="submit" class="w-100 form-btn" type="submit">Enviar</button></div>
        </form>
      </div>
    </div>
  </div>
  <!-- contato -->

  <!-- footer -->
  <div class="container">
  <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
    <div class="col-md-4 d-flex align-items-center">
      <span class="mb-3 mb-md-0 text-muted">&copy; 2022 Move, TCC Etec de Itanhaém</span>
    </div>

    <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
      <li class="ms-3"><a class="text-muted" href="https://instagram.com/solarisccp?igshid=YmMyMTA2M2Y="><svg class="bi" width="8" height="8"><i class="bi bi-instagram"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="8" height="8"><i class="bi bi-github"></i></a></li>
      <li class="ms-3"><a class="text-muted" href="#"><svg class="bi" width="8" height="8"><i class="bi bi-linkedin"></i></a></li>
    </ul>
  </footer>
  </div>
  <!-- footer -->

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>

<?php
  } else { header('Location: home-nolog.html'); }
?>