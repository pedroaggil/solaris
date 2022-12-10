<?php include('../php/connect.php');

	// Comando para deletar o registro no banco
	$deletar = "DELETE 
				FROM tb_artigos 
				WHERE cd_artigo = ".$_POST['codigo'];

	if ($result = $mysqli->query($deletar)) { // Se conseguir executar o comando, o registro será excluído
		header('Location: adm_artigos.php');}else{ echo'no consegui manitozito';}

 ?>