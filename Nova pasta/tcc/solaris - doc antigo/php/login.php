<?php include('connect.php');

	if (isset($_POST['mail'])) {

	    $mail = $_POST['mail'];
	    $password = $_POST['password'];

	    $sql = "SELECT * FROM tb_user WHERE ds_email = '".$mail."' AND ds_senha = '".$password."'";

	    if ($res = $mysqli->query($sql)) {

	        if ($res->num_rows == 1) {
	    
	            while ($linha = $res->fetch_object()) {
	    
	                if ($linha->nr_nivel == 1) {
	                    ?> <script> window.location.href = "../consult.php"; </script> <?php

	                } elseif ($linha->nr_nivel == 2) {
	                	?> <script> window.location.href = "../consult.php"; </script> <?php

	                } else {
	                	?> <script> window.history.go(-1); </script> <?php

	                }
	            }
	        }
	    }
	}

?>