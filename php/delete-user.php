<?php include('connect.php');

	// Comando para deletar o registro no banco
	$deletar = "DELETE 
				FROM tb_user 
				WHERE cd_user = ".$_GET['user'];

	if ($result = $mysqli->query($deletar)) { // Se conseguir executar o comando, o registro será excluído
		header('Location: ../admin/users.php');
	} else { // Senão, apresentará um erro
		echo 'Deu certo não família, tenta dnv ai pq tá foda';
		header('Location: ../admin/users.php');
	}

 ?>