<?php include('connect.php');

	// Comando para deletar o registro no banco
	//echo $_POST['table']." ".$_POST['id'];
	$deletar = "DELETE FROM tb_user WHERE cd_user = ".$_POST['id'];

	if ($result = $mysqli->query($deletar)) { // Se conseguir executar o comando, o registro será excluído
		echo "porque voice odeia populações vioce é mau";	
	} else { // Senão, apresentará um erro
		echo $result->error;
	}

 ?>