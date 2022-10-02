<?php 

	// Data
	$name = $_POST['name'];
	$subject = $_POST['ass'];
	$userMail = $_POST['mail'];
	$msg = $_POST['msg'];
	$date = date('d/m/Y');
	$hour = date('H:i:s');

	// Mail body
	$body = "
		<html>
			<table width='510' border='1' cellpadding='1' cellspacing='1' bgcolor='#CCCCCC'>
	           	<tr>
	             		<td>
	  					<tr>
	                			<td width='500'>Nome: $name</td>
	               		</tr>
	               		<tr>
	                 			<td width='320'>E-mail: <b>$userMail</b></td>
	     				</tr>
	               		<tr>
	                 			<td width='320'>Mensagem: $msg</td>
	               		</tr>
	           		</td>
	         		</tr>
	         		<tr>
	           		<td>Este e-mail foi enviado em <b>$date</b> às <b>$hour</b></td>
	         		</tr>
        	</table>
		</html>
	";

	// Send mail

		// Mail infos
		$addr = "pedroaggil@gmail.com";
		$subj = $_POST['ass'];

		// Format
		$headers  = 'MIME-Version: 1.0' . "\r\n";
	    $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
	    $headers .= 'From: $name <$userMail>';

	$sendmail = mail($addr, $subj, $body, $headers);

	if ($sendmail) {
		$mgm = "E-mail enviado.";
		echo " <meta http-equiv='refresh' content='10;URL=../email.php'>";

	} else {
		$mgm = "Falha ao enviar e-mail.";
		echo "";

	}

?>