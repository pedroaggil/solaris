<?php session_start(); /* Conexão entre servidor e banco de dados */

	$mysqli = new mysqli("localhost", "fjfxoyen_solaris", "Solaris.22", "fjfxoyen_solaris");
	$mysqli->set_charset("utf-8");

	if ($mysqli -> connect_errno) { /* Caso dê algum erro, o sistema avisa */
		echo "Cuidado com a depressão mas... a conexão com o banco falhou: erro número " . $mysqli -> connect_errno;
	}
?>