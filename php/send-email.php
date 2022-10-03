<?php 

if (isset($_POST['submit'])) {

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
	                			<td width='500'>Nome: ". $name ."</td>
	               		</tr>
	               		<tr>
	                 			<td width='320'>E-mail: <b>". $userMail ."</b></td>
	     				</tr>
	               		<tr>
	                 			<td width='320'>Mensagem: ". $msg ."</td>
	               		</tr>
	           		</td>
	         		</tr>
	         		<tr>
	           		<td>Este e-mail foi enviado em <b>". $date ."</b> às <b>". $hour ."</b></td>
	         		</tr>
        	</table>
		</html>
	";

	// Send mail

		// PHPMailer
		require_once('../src/PHPMailer.php');
		require_once('../src/SMTP.php');
		require_once('../src/Exception.php');

		use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\SMPTP;
		use PHPMailer\PHPMailer\Exception;

		$mail = new PHPMailer(true);

		try {
			$mail->isSMTP();
			$mail->Host       = 'smptp.gmail.com';
			$mail->SMPTPAuth  = true;
			$mail->Username   = 'pedroaggil@gmail.com';
			$mail->Password   = 'euvimbarganhar';
			$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
			$mail->Port       = 465;
			/*	Caso use a SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS, use a Port = 587	*/

			$mail->setFrom('pedroaggil@gmail.com', 'Usuário'); // Igual a Username
			$mail->addAddress('pedroaggil@gmail.com', 'Pedro Gil'); // Destinatário
			// Pode-se adicionar outros destinatários, um por linha

			$mail->isHTML(true);
			$mail->Subject    = $subject;
			$mail->Body       = $body;
			$mail->AltBody    = 'Olha o e-mail chegando!';

			if ($mail->send()) { echo 'deu tudo certo'; }
			else { echo 'nada dá certo nessa caralha'; }

		} catch (Exception $e) {
			echo 'Não deu muito certo não amigo, veja: {$mail->ErrorInfo}';

		}

}

?>