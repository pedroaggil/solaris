<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/235f508f3b.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style-new-admin">
    <link rel="icon" type="imagem/png" href="../img/icon.png" />
	<title>Novo ADM</title>
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
                  <li class="nav-item"><a href="../calendario/index.html" class="nav-link">Agenda</a></li>
                  <li class="nav-item"><a href="../admin/index.php" class="nav-link">Admin</a></li>
                </ul>


                <div class="dropdown text-end">
                  <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <img src="../img/user.png"/>
                  </a>
                  <ul class="dropdown-menu text-small">
                    <li><a class="dropdown-item" href="../home-nolog.html">Sair</a></li>
                  </ul>
                </div>
              </div>
            </div>
          </header>
          
          <main>
            <div class="box">
                <div class="inner-box">
                    <div class="forms-wrap">
                        <form action="../php/new-user.php" method="post" autocomplete="off" class="sign-in-form">
                            <div class="heading">
                                <h2>Cadastrar usuário</h2>
                            </div>
                            <div class="actual-form">
                               <div class="input-wrap">
                                    <input type="text" name="username" minlength="4" class="input-field" autocomplete="off" required/>
                                    <label>Nome</label>
                                </div>
                                <div class="input-wrap">
                                    <input type="email" name="email" minlength="4" class="input-field" autocomplete="off" required/>
                                    <label>Email</label>
                                </div>
                                <div class="input-wrap">
                                    <input type="password" name="password" minlenght="4" maxlength="16" class="input-field" autocomplete="off" required/>
                                    <label>Senha</label>
                                </div>
    
                                <input type="submit" value="Cadastrar" class="sign-btn">
                            </div>
                        </form>
    
                    </div>
                   
    
        <!--Javascript file-->
        <script src = "../js/login-animation.js"></script>
        <script src = "https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
        <script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
        

</body>
</html>