<!DOCTYPE html>
<html lang="bzs">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="favicon/favicon.ico" />
</head>

<?php
	//Se a pagina possui apenas codigo PHP, a linha abaixo eh necessaria:
	//header('Content-Type: text/html; charset=utf8');

	if(isset($_GET['produto']) && isset($_GET['codigo']) && isset($_GET['email'])){

		$produto = $_GET['produto'];
		$codigo = $_GET['codigo'];
		$email = $_GET['email'];

		echo 'Produto:' . $produto . '<br>';
		echo 'Código:' . $codigo . '<br>';
		echo 'E-mail:' . $email . '<br><br>';

		
	} else {
		echo 'Not found fields.';
	}
?>
<br>
<br>

<form action="index.php">
	<button type="submit">Retornar</button>
</form>

