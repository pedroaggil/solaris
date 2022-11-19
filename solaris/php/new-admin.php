<?php include('../php/connect.php');

	$email = $_POST['email'];
	$name = $_POST['username'];
	$password = SHA1($_POST['password']);

	$insert = "INSERT INTO tb_user (ds_email, ds_username, nr_nivel, ds_senha) VALUES ('". $email ."', '". $name ."', 2, '". $password ."')";
	$search =  "SELECT *
				FROM tb_user
				WHERE ds_email = '". $email . "'";
	$sql = $mysqli->query($search);

	if($sql->num_rows != 0) {
		echo 'deu certo não amigão, essa conta já existe';

	} else {

		if ($list = $mysqli->query($insert)) {
			$_SESSION['id'] = $linha->cd_user;
			$_SESSION['username'] = $linha->ds_username;
			$_SESSION['mail'] = $linha->ds_email;
			$_SESSION['level'] = $linha->nr_nivel;
			$lvl = $_SESSION['level'];

			header('Location: ../index.php');

		} else {
			echo $mysqli->error;

		};
	}
?>