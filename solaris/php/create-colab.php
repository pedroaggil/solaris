<?php include('connect.php');

	$name = $_POST['name'];
	$responsible = $_POST['responsible'];
	$mail = $_POST['mail'];
	$cellContact = $_POST['cell'];
	$type = $_POST['type'];
	$typeOfType = $_POST['type__type']; // type of sponsorship or employee's profession
	$cnpjOrCrm = $_POST['cnpj__crm']; // company/brand CNPJ or professional CRM
	$cpf = $_POST['cpf'];
	$image = $_FILES['image'];

	$insert;

	if ($type == 'Patrocínio') {
		$insert =  "INSERT INTO tb_colaborador 
					(cd_colab, ds_email, img_logo, nm_nome, nm_representante, nr_telefone, ds_tipopat, nr_cnpj, nr_cpf, ds_tipocolab, nr_aprovado) 
					VALUES (null, '". $mail ."', '". $image ."', '". $name ."', '". $responsible ."', '". $cellContact ."', '". $typeOfType ."', '". $cnpjOrCrm ."', '". $cpf ."', '". $type ."', 0)";

	} elseif ($type == 'Palestrante') {
		$insert =  "INSERT INTO 
					tb_colaborador (cd_colab, ds_email, img_logo, nm_nome, nm_representante, nr_telefone, nr_cpf, ds_profissao, ds_crm, ds_tipocolab, nr_aprovado) 
					VALUES (null, '". $mail ."', '". $image ."', '". $name ."', '". $responsible ."', '". $cellContact ."', '". $cpf ."', '". $typeOfType ."', '". $cnpjOrCrm ."', '". $type ."', 0)";

	} else {
		echo 'Tá fazendo coisa errada, né não programador imundo? <br>';
		echo $mysqli->error;

	}

	$sql = $mysqli->query($insert) ? header('Location: ../index.php') : echo $mysqli->error;

?>