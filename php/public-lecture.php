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
				WHERE hr_hora = ". $hour ." AND dt_data = ". $date;

	$query = $mysqli->query($search);

	if ($query->num_rows() != 0) {
		echo 'Este evento já está cadastrado';
	} else {
		$update =  "INSERT INTO tb_agenda VALUES 
						(null, '".$mail."', '".$tel."', '".$hour."', '".$date."', '".$addres."', '".$district."', '".$city."', 1, 1, 0)";

		if ($sql = $mysqli->query($update)) {
			header('Location: ../admin/index.php');
		} else {
			echo $mysqli->error;
		}
	}

?>