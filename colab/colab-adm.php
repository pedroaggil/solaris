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

<link rel="stylesheet" href="../css/form-colab.css"/>
<link rel="icon" type="imagem/png" href="../img/icon.png " />
<title> Formulário de colaborador</title>
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
      <form method="post" action="../php/create-colab.php"></form>
        <h3>Torne-se um colaborador</h3>
        <div class="container"> 
            <div class="input1" style="display: inline-block;">
              <input class="i1" name="name" placeholder="Empresa"></input>
              <span></span>
              <input class="i2" name="responsible" placeholder="Nome"></input>
            </div>
            <br>
            <div class="input2" style="display: inline-block;">
              <input class="i3" name="mail" placeholder="E-mail"></input>
              <span></span>
              <input class="i4" name="cell" placeholder="Telefone"></input>
            </div>
            <br>
            <!-- <input type="file" name="image"> -->
        </div>
        <div class="conta" style='margin-right:0px;'>
            <h6 style='font-size: 20px;'>Tipo de colaborador</h6>
            <input type='radio' value='Financeiro' name='type__type' id='financeiro'> Financeiro
          <br>
            <input type='radio' value='Físico' name='type__type' id='fisico'> Físico
          <br>
            <input type='radio' value='Didático' name='type__type' id='didatico'> Didático
          
       
        </div>  
        <div class="input3" style='margin-right: 0px;'>
              <input class="i5" name="cnpj__crm" placeholder="CNPJ ou CRM"></input>
              <span></span>
              <input class="i6" name="cpf" placeholder="CPF do Representante"></input>
        </div>
     
           

            <button type='submit'>Salvar</button>

      </form>
                        
    </div>
    </main>

     

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    </body>
</html>