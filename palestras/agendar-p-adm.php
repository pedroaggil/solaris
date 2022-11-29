<?php  include('../php/connect.php');
  if ($_SESSION['level'] == 2) {
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
<script src="https://kit.fontawesome.com/235f508f3b.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="../css/style-agend-p-adm.css" />
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
                  <li class="nav-item"><a href="../home-log.php#sobre " class="nav-link">Sobre nós</a></li>
                  <li class="nav-item"><a href="../home-log.php#colaboradores" class="nav-link">Colaboradores</a></li>
                  <li class="nav-item"><a href="#" class="nav-link">Artigos</a></li>
                  <li class="nav-item"><a href="../calendario/index.php" class="nav-link">Agenda</a></li>
                  <li class="nav-item"><a href="../admin/index.php" class="nav-link">Admin</a></li>
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
     <form class="form-horizontal" method="POST" action="../php/public-lecture.php">
    <div class="form">
    <div class="text">
        <h5 style="font-weight: 600;">Preencha as informações necessárias para a públicação da palestra</h5>
      </div>

    <div class="form-group">
    <label for="cidade" class="col-sm-2 control-label">Cidade</label>
    <div class="col-sm-10">
      <input type="text" name="cidade" class="form-control" id="cidade" placeholder="Cidade" required>
    </div>
    </div>

    <div class="form-group">
    <label for="email" class="col-sm-2 control-label">E-mail</label>
    <div class="col-sm-10">
      <input type="email" name="email" class="form-control" id="email" placeholder="E-mail" required>
    </div>
    </div>

    <div class="form-group">
    <label for="bairro" class="col-sm-2 control-label">Bairro</label>
    <div class="col-sm-10">
      <input type="text" name="bairro" class="form-control" id="bairro" placeholder="Bairro" required>
    </div>
    </div>

    <div class="form-group">
    <label for="endereco" class="col-sm-2 control-label">Endereço</label>
    <div class="col-sm-10">
      <input type="text" name="endereco" class="form-control" id="endereco" placeholder="Endereço" required>
    </div>
    </div>

    <div class="form-group">
    <label for="tel" class="col-sm-2 control-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" name="tel" class="form-control" id="tel" placeholder="Telefone" required>
    </div>
    </div>

    <div class="form-group">
    <label for="data" class="col-sm-2 control-label">Data</label>
    <div class="col-sm-10">
      <input type="date" name="data" class="form-control datepicker" id="data" required>
    </div>
    </div>

    <div class="form-group">
    <label for="horario" class="col-sm-2 control-label">Horário</label>
    <div class="horario col-sm-10">
      <select name="horario" required>
        <option value="10:00">10:00</option>
        <option value="11:00">11:00</option>
        <option value="12:00">12:00</option>
        <option value="14:00">14:00</option>
        <option value="15:00">15:00</option>
        <option value="16:00">16:00</option>
      </select>
    </div>
    </div>

    <div class="">
      <button type="reset" value="Reset">Limpar</button>
      <button type="submit">Prosseguir</button>
    </div>
    </div>  
  </form>
  <!-- formulário -->

    </div>
    </main>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    </body>
</html>
  <?php } else { header('Location: ../index.php'); } ?>