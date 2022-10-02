<!DOCTYPE html>
<html>
<head>
  <title>Perfil - <?= $_SESSION['username']; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
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

      <a class="navbar-brand" href="../index.html">
        <img src="../img/logo.png"/>
      </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li class="nav-item"><a href="../index.html" class="nav-link">Ínicio</a></li>
          <li class="nav-item"><a href="../index.html#sobre " class="nav-link">Sobre nós</a></li>
          <li class="nav-item"><a href="../index.html#colaboradores" class="nav-link">Colaboradores</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Artigos</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Fórum</a></li>
          <li class="nav-item"><a href="#" class="nav-link">Agenda</a></li>
        </ul>


        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="../img/user.png"/>
          </a>
          <ul class="dropdown-menu text-small">
            <li><a class="dropdown-item" href="#">Sair</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
        <div class="container-card">
              <div class="card-body">
                    <center class="perfil"> 
                        <img src="../img/s.png" class="img-circle" width="125"/>
                        <h4 class="card-title">Solaris</h4>
                        <h6 class="card-subtitle">Accounts Manager Amix corp</h6>
                        <button type="button" class="form-btn" ><i class="bi bi-images"></i></button>
                    </center>
                    <form class="form-horizontal form-material">
                        <div class="form-group">
                        <label class="col-md-12">Usuário</label>
                          <div class="col-md-12">
                            <input type="text" placeholder="Johnathan Doe" class="form-control form-control-line">
                          </div>
                        </div>
                        <div class="form-group">
                        <label for="example-email" class="col-md-12">E-mail</label>
                          <div class="col-md-12">
                            <input type="email" placeholder="johnathan@admin.com" class="form-control form-control-line" name="example-email"id="example-email">
                          </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-12">Senha</label>
                          <div class="col-md-12">
                            <input type="password" placeholder="password" class="form-control form-control-line">
                          </div>
                        </div>
                        <div class="form-group">
                        <label class="col-md-12">Telefone</label>
                          <div class="col-md-12">
                              <input type="text" placeholder="123 456 7890" class="form-control form-control-line">
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="col-sm-12">
                              <form action="#"><button class="w-100 form-btn" href="submit">Salvar</button></form>
                          </div>
                        </div>
                    </form>
              </div>
          </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

</body>
</html>