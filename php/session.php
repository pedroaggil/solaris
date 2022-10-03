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


