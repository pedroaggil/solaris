<?php include('connect.php');

	$email = $_POST['email'];
	$name = $_POST['username'];
	$password = $_POST['password'];

	$inserir = "INSERT INTO tb_user (ds_email, ds_username, nr_nivel, ds_senha) VALUES ('". $email ."', '". $name ."', 1, '". $password ."')";

	if ($lista = $mysqli->query($inserir)) {
		?> <script>	window.location.href = "consult.php"; </script> <?php 

	} else {
		echo $mysqli->error;
	}
?>