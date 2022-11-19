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

<link rel="stylesheet" href="../css/solict-p-adm.css" />
<link rel="icon" type="imagem/png" href="../img/icon.png " />
<title>Solitações de palestras</title>
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
        
        <h3>Solicitações de palestras</h3>
        <div class="arrumar">
            <div class="container">
                <div class="row">
                    <div class="comunista col-3">
                        <span class="negrito">Telefone</span>
                    </div>
                    <!-- <div class="col-1"></div>  -->
                    <div class="col-3">
                        <span class="negrito" style="margin: 0  0 400px 0;">Endereço</span>
                    </div>
                    <div class="col-2 colunalink">
                        <span class="negrito" style="margin: 0  0 400px 0;">Data</span>
                    </div>
                </div>
                <?php include '../php/connect.php';

                    $search =  "SELECT *
                                FROM tb_agenda
                                WHERE id_aprovada = 0";
                    if ($result = $mysqli->query($search)) {
                      echo 'hey';
                    } else { echo $mysqli->error; }

                    // while ($row = $result -> fetch_assoc()) {
                    //   echo '
                    //   <div class="row">
                    //     <div class="comunista col-3">
                    //         <span class="">'. $row['nr_tel'] .'</span>
                    //     </div>
                    //     <!-- <div class="col-1"></div>  -->
                    //     <div class="col-3">
                    //         <span class="" style="margin: 0  0 400px 0;">'. $row['ds_endereco'] .'</span>
                    //     </div>
                    //     <div class="col-2 colunalink">
                    //         <span class="" style="margin: 0  0 400px 0;">'. $row['dt_data'] .'</span>
                    //     </div>
                    //     <div class="col-1">
                    //         <button><a href="../php/aprove-event.php?event=$row->cd_agenda"><img style="width: 30px; height: 30px;" src="../img/marca-de-verificacao.png" alt="Aprovar evento"></a></button>
                    //     </div>
                    //     <div class="col-1">
                    //         <button><a href="../php/reprove-event.php?event=$row->cd_agenda"><img style="width: 30px; height: 30px;" src="../img/rejeitado.png" alt="Reprovar evento"></a></button>
                    //     </div>
                    //   ';				
                    // }
                  ?>
            </div>
    </div>
    </main>

     

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>

    </body>
</html>