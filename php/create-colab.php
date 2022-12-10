<?php include('connect.php');

	$name = $_POST['name'];
	$responsible = $_POST['responsible'];
	$mail = $_POST['mail'];
	$cellContact = $_POST['cell'];
	$type = $_POST['type'];
	$typeOfType = $_POST['type__type']; // type of sponsorship or employee's profession
	$cnpjOrCrm = $_POST['cnpj__crm']; // company/brand CNPJ or professional CRM
	$cpf = $_POST['cpf'];
	// $image = $_FILES['image'];

	$insert = "INSERT INTO tb_colaborador 
				VALUES (null,  '". $mail ."', null, '". $name ."', '". $responsible ."', '". $cellContact ."', '". $typeOfType ."', '". $type ."', 0, '". $cnpjOrCrm ."')";

	if ($sql = $mysqli->query($insert)) {
		header('Location: ../index.php');
	} else {
		echo $mysqli->error;
	}

?>