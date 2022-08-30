<?php include('connect.php');

	$cod = $_POST['cd-user'];
	$mail = $_POST['email'];
	$user = $_POST['username'];
	$pw = $_POST['password'];

	$alt = "UPDATE tb_user SET ds_email = '".$mail."', ds_username = '".$user."', nr_nivel = 1, ds_senha = '".$pw."' WHERE cd_user = '".$cod."';";

	if ($result = $mysqli->query($alt)) {

		?>
		<script> window.location.href = 'consult.php'; </script>
		<?php

	} else {
		echo $mysqli->error;

	}

?>