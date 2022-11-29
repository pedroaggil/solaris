<?php include('../php/connect.php'); if ($_SESSION['level'] == 2) { ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titulação de usuário</title>

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="icon" type="imagem/png" href="../img/icon.png " />

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="../css/style-tags-adm.css">
</head>

<body>
    <main>


        <div class="box">
        	<div class="titulo">
        		<h3 style="text-align: center;">Titulação de usuário</h3>
        	</div>
            <div class="arrumar">
                <?php 

					$_SESSION['user'] = $_GET['user'];
					$search = "SELECT *
							FROM tb_user 
							WHERE cd_user = ". $_GET['user'];
					$result = $mysqli->query($search);

					while ($row = $result -> fetch_object()) {
						echo "
						<div class='container'>
							<form action='../php/tag-include.php' method='post'>
								<div class='input1'>
								<input style='border-radius: 10px; height: 40px; width: 300px; border: 2px solid #F2955E; padding-left:1rem;' readonly name='username' value='$row->ds_username'>
							</div>
							<div class='input2'>
								<input style='border-radius: 10px; height: 40px ; width: 300px; border: 2px solid #F2955E; padding-left:1rem;' type='email' readonly name='mail' value='$row->ds_email'>
		</div>
		</div>
								<h4>Dar um título</h4>
								
								<input type='radio' value='esp' name='tag' id='especialista'> Especialista
								<input type='radio' value='med' name='tag' id='medico'> Médico
								<input type='radio' value='pal' name='tag' id='palestrante'> Palestrante
		</div>

								<button style='margin-left: 4rem; font-family: Poppins; font-size:16px;' type='submit' value='Salvar'>Salvar</button>
								<button style='font-family: Poppins; font-size: 16px;'><a href='javascript:history.go(-1)'>Voltar</a></button>
								
							</form>
						";
					}
				?>
            </div>
    </main>
</body>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous"></script>
</html>
<?php } else { header('Location: ../index.php'); } ?>