<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Enviar email</title>
</head>
<body>

	<form action="php/send-email.php" method="post">
		<input type="text" name="name" placeholder="Seu nome">
		<input type="text" name="ass" placeholder="Assunto">

		<br>

		<input type="email" name="mail" placeholder="Seu e-mail">
		
		<br>

		<textarea name="msg" cols="46" rows="7"></textarea>

		<br>

		<input type="submit" name="submit" value="Enviar">
	</form>

</body>
</html>