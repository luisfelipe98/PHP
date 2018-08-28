<?php

session_start();

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$achou = false;

require('parametros.php');

foreach ($usuarios as $chave => $valor) {
	
	if (($usuario == $chave) && ($senha == $valor)) {
	
		$achou = true;
	
	}

}

if ($achou == true) {
	
	$_SESSION['logado'] = true; // Confirmando que temos um usuário cadastrado
	$_SESSION['usuario'] = $usuario; // Armazenando o usuário que acabou de ser logado 
	header('Location: inicio.php');
	
} else {
	
	header('Location: login.php');
	
}
	
?>