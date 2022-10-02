<?php include 'connect.php';

	// Outin = entrar/sair
	$outin = $_POST['outin'];

	if (isset($_SESSION['mail'])) {
		$sql = "SELECT * FROM tb_user WHERE ds_email = '". $_SESSION['mail'] ."'";
		
	}

?>