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

      <a class="navbar-brand" href="home-log.php">
        <img src="img/logo.png"/>
      </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li class="nav-item"><a href="home-log.php" class="nav-link">Ínicio</a></li>
          <li class="nav-item"><a href="#sobre" class="nav-link">Sobre nós</a></li>
          <li class="nav-item"><a href="#colaboradores" class="nav-link">Colaboradores</a></li>
          <li class="nav-item"><a href="artigos/exibir_artigos.php" class="nav-link">Artigos</a></li>
          <li class="nav-item"><a href="calendario/index.php" class="nav-link">Agenda</a></li>
          <?php if ($_SESSION['level'] == 2) { echo '<li class="nav-item"><a href="admin/index.php" class="nav-link">Admin</a></li>'; } ?>
        </ul>


        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="img/user.png"/>
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="perfil/profile.php">Meu perfil</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" name="outin" id="outin" href="php/logout.php">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
  <!-- navbar -->

  <!-- carrossel -->
	<div class="content">
    <div class="slides">
        <input type="radio" name="slide" id="slide1" checked>
        <input type="radio" name="slide" id="slide2">
        <input type="radio" name="slide" id="slide3">

        <div class="slide s1">
          <img src="img/banner.jpg" alt="">
        </div>

        <div class="slide">
          <img src="img/banner2.jpg" alt="">
        </div>

        <div class="slide">
          <a href="https://www.instagram.com/p/CklwNwWp3ge/?utm_source=ig_web_copy_link"><img src="img/banner3.jpg" alt=""></a>
        </div>
    </div>

    <div class="navigation">
      <label class="bar" for="slide1"></label>
      <label class="bar" for="slide2"></label>
      <label class="bar" for="slide3"></label>
    </div>
  </div>
  <!-- carrossel -->


   <!-- icons -->
  <div class="container marketing">
    <div class="row">
      <div class="col-lg-4">
        <img src="img/c.png">

        <h2 class="fw-bold">Carcinoma</h2>
        <p>O carcinoma basocelular é o mais comum. Tem início nas células basais e cracteriza-se por um nódulo de cera branco ou mancha marrom escamosa.</p>
      </div>
      <div class="col-lg-4">
        <img src="img/g.png">

        <h2 class="fw-bold">Carcinoma </h2>
        <p>O carcinoma espinocelular é o 2° mais comum. Ocorre devido a presença de células escamosas na epiderme (parte superficial da pele).</p>
      </div>
      <div class="col-lg-4">
        <img src="img/m.png">

        <h2 class="fw-bold">Melanoma</h2>
        <p>O melanoma é o mais raro. Tem origem nas células produtoras da melanina e pode aparecer em qualquer área do corpo</p>
      </div>
    </div>
   <!--  icons -->
    <hr class="divider">
    <!-- cards -->
    <div class="container px-4 py-5" id="custom-cards">
    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <a href="#" class="card-link">
        <div class="card-img-hover"></div>
        </a>
        <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg" style="background-image: url('img/verao.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Quantos tipos existem? Aprenda sobre a regra ABCDE</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="img/icon.png" alt="Solaris" width="34" height="34" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <a href="https://www.instagram.com/p/CklwNwWp3ge/" class="text-white"><i class="bi bi-instagram" width="1rem" height="1rem"></i></a>
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
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Curioso? Nos acompanhe em...</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="img/icon.png" alt="Solaris" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <a href="https://www.instagram.com/p/CiAq11pOYGd/?utm_source=ig_web_copy_link" class="text-white"><i class="bi bi-instagram" width="1rem" height="1rem"></i></a>
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
            <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Se atente aos sinais! Proteção é essencial</h2>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="img/icon.png" alt="Solaris" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <a href="https://www.instagram.com/p/CkrKFkXpIUh/?utm_source=ig_web_copy_link" class="text-white"><i class="bi bi-instagram" width="1rem" height="1rem"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cards -->
	<div class="espaço1"></div>
	<hr class="divider">
    <!-- nos conheça -->
    <div class="row featurette" id="sobre">
        <div class="col-md-7">
          <h2 class="featurette-heading fw-bold" style="font-size: 48px;"><a class="logo"><img src="img/s.png"/></a>&nbsp;Conheça mais sobre nós</h2>
          <h3 class="sub"><span class="text-muted">Entenda qual o motivo do projeto Solaris</span></h3>
          <p class="lead">Nossa maior motivação para criá-lo foi a consciência de que boa parte da população, que está cotidianamente exposta ao sol, não possui conhecimento acerca do câncer de pele e nem como evitá-lo, contribuindo para o aumento do índice anual no país.
          <br><br>
          Sendo assim, nosso objetivo principal é promover o tema e torná-lo conhecido, quebrando os "tabus" a respeito do câncer. Para além, esperamos que vínculos sejam estabelecidos entre os que desejam compartilhar suas histórias e os que buscam entender mais sobre o câncer de pele!
          </p>
        </div>
        <div class="col-md-5">
          <img src="img/grupo.jpg" width="100%" height="100%"/>
        </div>
      </div>
    <!-- nos conheça -->
    <hr class="divider">
    </div>
    <div class="espaço"></div>
  	
  <!-- colaboradores -->
  <div class="colab" id="colaboradores">
    <h2 class="fw-bold text-center" style="font-size: 40px;">Conheça nossos colaboradores</h2>
    <h4 class="text-colab"> Buscamos sempre atrair, reter e engajar profissionais talentosos para apoiar nossos negócios. Por isso, estimulamos diferentes formas de aprendizado e desenvolvimento no Solaris e encorajamos você a participar também! Afinal, conhecimento e experiência nunca é demais. 
    Acreditamos que cada colaborador oferece algo único e celebramos essas diferenças. Quando combinamos nossa diversidade de conhecimentos, experiências, estilos e perfis, o resultado se traduz em excelente performance. A seguir, um grupo de colaboradores.</h4>
    <div class="conjunto">
    
    </div>
	<!--<div class="colabtn"><button name="submit" class="form-btn" type="submit">Quero me tornar um colaborador</button></div>-->
  </div>
  <hr class="divider2">
  <!-- colaboradores -->
  
  <!-- contato -->
    <div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 mb-3" style="font-size: 58px;">Vamos conversar!</h1>
        <h1 class="display-4 fw-bold lh-1 mb-3" style="font-size: 50px;">Entre em contato conosco</h1>
        <p class="col-lg-10 fs-4">Tem alguma dúvida ou deseja participar do projeto? Nos mande uma mensagem através do formulário ao lado ou acesse nossas redes!</p>
        <a class="text-muted" href="https://instagram.com/solarisccp?igshid=YmMyMTA2M2Y="><img src="img/insta.png" style="width: 50px; height: 50px; margin:1rem 1rem 0 0;"></a>
        <a class="text-muted" href="github.com/pedroaggil/solaris"><img src="img/git.png" style="width: 50px; height: 50px; margin-top: 1rem;"></a>
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