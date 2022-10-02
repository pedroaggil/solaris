<?php include('../php/connect.php');

	$email = $_POST['email'];
	$name = $_POST['username'];
	$password = SHA1($_POST['password']);

	$inserir = "INSERT INTO tb_user (ds_email, ds_username, nr_nivel, ds_senha) VALUES ('". $email ."', '". $name ."', 2, '". $password ."')";

	if ($lista = $mysqli->query($inserir)) {
		header('Location: index.html');

	} else {
		echo $mysqli->error;
	}
?>