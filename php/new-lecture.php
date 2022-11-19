<?php include('connect.php');

	$name = $_POST['nome'];
	$tel = $_POST['tel'];
	$mail = $_POST['mail'];
	$city = $_POST['cidade'];
	$district = $_POST['bairro'];
	$addres = $_POST['endereco'];
	$date = $_POST['data'];
	$hour = $_POST['horario'];

	$update =  "INSERT INTO tb_agenda 
				VALUES (null, '".$mail."', '".$tel."', '".$name."', '".$hour."', '".$date."', '".$addres."', '".$district."', '".$city."', 1, 1)";

	if ($sql = $mysqli->query($update)) {
		header('Location: ../admin/index.php');
	} else {
		echo $mysqli->error;
	}

?>