<?php include('connect.php');

	if (isset($_POST['mail'])) {

	    $mail = $_POST['mail'];
	    $password = SHA1($_POST['password']);

	    $sql = "SELECT * 
	    		FROM tb_user 
	    		WHERE ds_email = '". $mail ."' AND ds_senha = '". $password ."'";

	    if ($res = $mysqli->query($sql)) {

	        if ($res->num_rows == 1) {
	    
	            while ($linha = $res->fetch_object()) {
					
					$_SESSION['id'] = $linha->cd_user;
					$_SESSION['username'] = $linha->ds_username;
					$_SESSION['mail'] = $linha->ds_email;
					$_SESSION['level'] = $linha->nr_nivel;
					$lvl = $_SESSION['level'];
	    
	                if ($_SESSION['level'] == 1) {
						echo 'Parece que deu tudo certo com seu login, a não ser que você seja um estelionatário sem vergonha';
						header('Location: ../home-log.php');

	            	} else if ($_SESSION['level'] == 2) {
						echo 'E ae meu patrão, finalmente resolveu trabalhar né vagabundo';
	                	header('Location: ../admin/index.php');
					}
	            }
	        } else {
				?><script> alert('Login e/ou senha inválidos, tente novamente'); </script><?php
				header('Location: ../login/index.html');

			}
	    }
	}
?>