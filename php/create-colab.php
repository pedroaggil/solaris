<?php include('connect.php');

	$name = $_POST['name'];
	$responsible = $_POST['responsible'];
	$mail = $_POST['mail'];
	$cellContact = $_POST['cell'];
	$type = $_POST['tag'];
	$image = $_FILES['image'];

	$insert =  "INSERT INTO tb_colaborador 
					(cd_colab, ds_email, img_logo, nm_nome, nm_representante, nr_telefone, ds_tipopat, nr_aprovado) 
					VALUES (null, '". $mail ."', '". $image ."', '". $name ."', '". $responsible ."', '". $cellContact ."', '". $typeOfType ."', 0)";

	if ($sql = $mysqli->query($insert)) { header('Location: ../index.php') } else { echo $mysqli->error; }

?>