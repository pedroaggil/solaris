<?php include('../php/connect.php'); if($_SESSION['id'] = 2){ ?>
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
  <link rel="stylesheet" type="text/css" href="../css/exibir_artigos.css">
  <link rel="icon" type="imagem/png" href="../img/icon.png">
</head>
<body>
  <!-- Navbar -->
    <header class="p-3 mb-3 border-bottom">
        <div class="container">

          <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">

          <a class="navbar-brand" href="#">
            <img src="../img/logo.png"/>
          </a>

            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
              <li class="nav-item"><a href="../index.php" class="nav-link">Ínicio</a></li>
              <li class="nav-item"><a href="../index.php" class="nav-link">Sobre nós</a></li>
              <li class="nav-item"><a href="../index.php" class="nav-link">Colaboradores</a></li>
              <li class="nav-item"><a href="exibir_artigos.php" class="nav-link">Artigos</a></li>
              <li class="nav-item"><a href="../calendario/index.php" class="nav-link">Agenda</a></li>
            </ul>


            <div class="dropdown text-end">
              <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="../img/user.png"/>
              </a>
              <ul class="dropdown-menu">
                <?php 

                  if (isset($_SESSION['id'])) {
                      ?><li><a class="dropdown-item" href="../php/logout.php">Sair</a></li><?php } else { ?><li><a class="dropdown-item" href="../login/index.html">Entrar</a></li><?php } ?>
          </ul>
            </div>
          </div>
        </div>
      </header>
  <!--Navbar-->
  
  <!-- título -->
  <div class="title">
    <h4 style="font-weight: 600;">Artigos da ONG/</h4>
    <p>Sou um parágrafo. Clique aqui para editar e adicionar o seu próprio texto</p>
    <hr class="">
  <!-- título-->

    <form method="get" >
        <select name="filtro">
          <option value="">Busque por...</option> 
          <option value="prevenção">prevenção</option>
          <option value="ajuda a tratamento">ajuda a tratamento</option>
          <option value="causadores">causadores</option>
          <option value="tecnologias">tecnologias</option>
          <option value="">limpar filtro</option> 
        </select>
        <input type="submit" value="Filtrar" class="filtro">
    </form>
  </div>
    <?php
  	$filtro = $_GET['filtro'];
  
if (isset($filtro)) {
        
      $search =  "SELECT * FROM tb_artigos WHERE ds_tag LIKE  '%$filtro%'";

        if($sql = $mysqli->query($search)){

            while ($linha = $sql->fetch_object()) { ?>

                <form method="post" action="ler_artigo.php">
                    <input type="hidden" name="codigo" readonly value="<?php echo $linha->cd_artigo;?>">
                    <input type="hidden" name="url" readonly value="<?php echo $linha->ds_conteudo;?>">
                        <div class ="artigo">
                           <div class="art_title"><?php echo $linha->nm_titulo;?></div>
                          	<div class="tags">Tags principais:<?php echo $linha->ds_tag;?></div>
                        </div>
                       	<input type="submit" value="Ler artigo" class="ler">
                </form>
  				<?php if($_SESSION['id'] = 2){?>
  				<form method="post" action="ler_artigo.php">
                  <input type="hidden" name="codigo" readonly value="<?php echo $linha->cd_artigo;?>">
                  <input type="submit" value="Excluir Artigo" class="ler">
                </form>
  				<form method="post" action="ler_artigo.php">
                  <input type="hidden" name="codigo" readonly value="<?php echo $linha->cd_artigo;?>">
                  <input type="submit" value="Editar Artigo" class="ler">
                </form>
  				<hr class="divider">
  				<?php } ?>
    <?php  unset($filtro); } } else { echo 'não tem artigos';}}else{ $search =  "SELECT * FROM tb_artigos";

        if($sql = $mysqli->query($search)){

            while ($linha = $sql->fetch_object()) { ?>

                <form method="post" action="ler_artigo.php">
                    <input type="hidden" name="codigo" readonly value="<?php echo $linha->cd_artigo;?>">
                    <input type="hidden" name="url" readonly value="<?php echo $linha->ds_conteudo;?>">
                        <div class="artigo">
                          <div class="art_title"><?php echo $linha->nm_titulo;?></div>
                          <div class="tags">Tags principais:<?php echo $linha->ds_tag;?></div>
                        </div>
                    	<input type="submit" value="Ler artigo" class="ler">
                </form>
    				<?php if($_SESSION['id'] = 2){?>
  				<form method="post" action="exc_artigo.php">
                  <input type="hidden" name="codigo" readonly value="<?php echo $linha->cd_artigo;?>">
                  <input type="submit" value="Excluir Artigos" class="ler">
                </form>
  				<form method="post" action="edit_artigo.php">
                  <input type="hidden" name="codigo" readonly value="<?php echo $linha->cd_artigo;?>">
                  <input type="submit" value="Editar Artigo" class="ler">
                </form>
  				<?php } ?>
 				<hr class="divider">

            
    <?php } } else { echo 'não tem artigos';} } }else{ echo'you no es adm manito';}?>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</html>