<?php include('connect.php');

	if (isset($_POST['mail'])) {

	    $mail = $_POST['mail'];
	    $password = SHA1($_POST['password']);

	    $sql = "SELECT * 
	    		FROM 'tb_user' 
	    		WHERE 'ds_email' = '". $mail ."' AND 'ds_senha' = '". $password ."' 
				LIMIT 1";

	    if ($res = $mysqli->query($sql)) {

	        if ($res->num_rows == 1) {
	    
	            while ($linha = $res->fetch_object()) {
					
					$_SESSION['id'] = $linha->cd_user;
					$_SESSION['username'] = $linha->ds_username;
					$_SESSION['mail'] = $linha->ds_email;
					$_SESSION['level'] = $linha->nr_nivel;
					$lvl = $_SESSION['level'];
	    
	                if ($_SESSION['level'] == 1) {
						header('Location: ../home-log.php');

	            	} elseif ($_SESSION['level'] == 2) {
	                	header('Location: ../admin/index.html');

	                } else {
						header('Location: ../login/index.html');

	                }
	            }
	        }
	    }
	}
?>