<?php include('connect.php');

	// $name = $_POST['nome'];
	$tel = $_POST['tel'];
	$mail = $_POST['email'];
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

	if ($query = $mysqli->query($search)) {
		$update =  "INSERT INTO tb_agenda VALUES 
					(null, '".$mail."', '".$tel."', '".$hour."', '".$date."', '".$addres."', '".$district."', '".$city."', 1, 1, 0, null)";

		if ($sql = $mysqli->query($update)) {
			header('Location: ../admin/index.php');
		} else {
			echo $mysqli->error;
		}
	}


?>