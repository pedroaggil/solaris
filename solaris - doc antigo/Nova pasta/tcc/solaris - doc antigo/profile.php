<?php include('php/connect.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Perfil &middot; <?= $row->ds_username; ?></title>

	<!-- jQuery -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
</head>
<body>

	<?php 

		$search = "SELECT * FROM tb_user WHERE cd_user = ". $_GET['user'];
		$result = $mysqli->query($search);

		while ($row = $result -> fetch_object()) {
			echo $row->ds_username;
			echo "<br>";

			if ($row->ds_tag != null) {
				if ($row->ds_tag == "esp") {
					echo "Especialista";

				} elseif ($row->ds_tag == "med") {
					echo "Médico";
				
				} elseif ($row->ds_tag == "pal") {
					echo "Palestrante";

				}
			} else {
				echo "<br>";
				
			}

			echo "<br>";
			echo "<input type='text' readonly value='$row->ds_username'><br>";
			echo "<input type='text' readonly value='$row->ds_email'>";

		}

	 ?>

</body>
</html>