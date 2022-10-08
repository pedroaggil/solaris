<!DOCTYPE html>
<html lang="pt-br">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Comprovação de palestra</title>
      	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

	<link rel="stylesheet" type="text/css" href="../css/style-session.css">
</head>
<body>
      <main>
<div class="box">
      <h3>Comprovação de palestra</h3>
      <div class="text">
<?php
include_once("connect.php");
$_SESSION['tel'] = $_POST['tel'];
$_SESSION['cidade'] = $_POST['cidade'];
$_SESSION['bairro'] = $_POST['bairro'];
$_SESSION['endereco'] = $_POST['endereco'];
$_SESSION['data'] = $_POST['data'];
$_SESSION['horario'] = $_POST['horario'];
$_SESSION['email'] = $_POST['email'];

$tel = $_SESSION['tel'];
$cidade = $_SESSION['cidade'];
$bairro = $_SESSION['bairro'];
$endereco = $_SESSION['endereco']; 
$data = $_SESSION['data']; 
$horario = $_SESSION['horario'];
$email = $_SESSION['email'];

//pendente ou definitivo, banco de dados, salvar data
//SELECT * FROM tb_usuario where cd_usuario = informação da sessão

$sql = "INSERT INTO tb_agenda (ds_email, nr_telefone, ds_cidade, ds_bairro, ds_logradouro, hr_hora, dt_data) VALUES ('".$email."', '".$tel."', '" .$cidade. "', '" .$bairro. "', '" .$endereco. "' , '" .$horario. "', '" .$data. "')";

if ( mysqli_query ( $mysqli, $sql )) {   
      echo "Telefone: " . $tel . "<br>";
      echo "Cidade: " . $cidade . "<br>";
      echo "Bairro: " . $bairro . "<br>";
      echo "Endereço: " . $endereco . "<br>";
      echo "Data: " . $data . "<br>";
      echo "Horário: " . $horario . "<br>";
} else {  
      echo "Erro: " . $sql . "<br>" . mysqli_error ( $mysqli ) ; 
}
mysqli_close ( $mysqli ) ;



?>
</div>
<button style="font-family: Poppins; font-size: 16px;"><a href='javascript:history.go(-1)'>Voltar</a></button>
</div>
</main>
</body>
</html>