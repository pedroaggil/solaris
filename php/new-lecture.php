<?php include('connect.php');

	$name = $_POST['nome'];
	$tel = $_POST['tel'];
	$mail = $_POST['mail'];
	$city = $_POST['cidade'];
	$district = $_POST['bairro'];
	$addres = $_POST['endereco'];
	$date = $_POST['data'];
	$hour = $_POST['horario'];

	$search =  "SELECT * 
				FROM tb_agenda 
				WHERE hr_hora = '". $hour ."' AND dt_data = '". $date ."' 
				ORDER BY cd_agenda ASC 
				LIMIT 1";

	$query = $mysqli->query($search);

	$insert =  "INSERT INTO tb_agenda VALUES 
					(null, '".$mail."', '".$tel."', '".$hour."', '".$date."', '".$addres."', '".$district."', '".$city."', 0, 0, 0)";

	if ($sql = $mysqli->query($insert)) {
		header('Location: ../admin/index.php');
	} else {
		echo $mysqli->error;
	}

?>