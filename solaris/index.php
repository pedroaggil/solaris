<?php include 'php/connect.php';

	if (isset($_SESSION['id'])) { header('Location: home-log.php'); }
    else { header('Location: home-nolog.php'); }

 ?>