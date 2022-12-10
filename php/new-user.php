<?php include('connect.php');

	$email = $_POST['email'];
	$name = $_POST['username'];
	$password = SHA1($_POST['password']);

	$sql =  "SELECT * 
			FROM tb_user 
			WHERE ds_email = '". $email ."'";

	$res = $mysqli->query($sql);

	if($res->num_rows != 0) {
		echo 'vc ja tem uma conta';

	} else {  $insert = "INSERT INTO tb_user (ds_email, ds_username, nr_nivel, ds_senha) VALUES ('". $email ."', '". $name ."', 1, '". $password ."')";

		if ($list = $mysqli->query($insert)) {
			header('Location: ../login/index.html');

		} else {
			echo $mysqli->error;

		};
	}
?>