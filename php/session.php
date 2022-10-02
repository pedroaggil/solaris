<?php
include_once("connect.php");
$_SESSION['tel'] = $_POST['tel'];
$_SESSION['cidade'] = $_POST['cidade'];
$_SESSION['bairro'] = $_POST['bairro'];
$_SESSION['endereco'] = $_POST['endereco'];
$_SESSION['data'] = $_POST['data'];
$_SESSION['horario'] = $_POST['horario'];

$tel = $_SESSION['tel'];
$cidade = $_SESSION['cidade'];
$bairro = $_SESSION['bairro'];
$endereco = $_SESSION['endereco']; 
$data = $_SESSION['data']; 
$horario = $_SESSION['horario'];

//pendente ou definitivo, banco de dados, salvar data
//SELECT * FROM tb_usuario where cd_usuario = informação da sessão

$sql = "INSERT INTO `eventos` (nr_tel, nm_cidade, nm_bairro, ds_endereco, hr_horario, nr_nivel, dt_data) values ('".$tel."', '" .$cidade. "', '" .$bairro. "', '" .$endereco. "' , '" .$horario. "', '1', '" .$data. "')";

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


