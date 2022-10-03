<?php include('connect.php');

	$email = $_POST['email'];
	$name = $_POST['username'];
	$password = SHA1($_POST['password']);

	$inserir = "INSERT INTO tb_user (ds_email, ds_username, nr_nivel, ds_senha) VALUES ('". $email ."', '". $name ."', 1, '". $password ."')";

	if ($lista = $mysqli->query($inserir)) {
		header('Location: ../login/index.html');

	} else {
		echo $mysqli->error;
	}
?>