<?php

require('logado.php');

require('parametros.php');

echo "Olá usuário " . $_SESSION['usuario'] . ", você selecionou a categoria " . $_GET['categoria'] . " e a opção " . $_GET['opcao'];

echo "<form method='GET'>
	<input type='submit' value='Sair' name='sair'>
	</form>";

if (isset($_GET['sair'])) {
	
	session_destroy();
	$_SESSION['logado'] = false;
	header('Location: login.php');
	
}
	
?>