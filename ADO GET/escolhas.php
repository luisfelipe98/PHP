<?php

require('logado.php');

echo "Olá usuário " . $_SESSION['usuario'] . ", você selecionou a categoria ". $_GET['categoria'];

if (isset($_GET['categoria'])) {
	
	if ($_GET['categoria'] == "Animais") {
		
		require('parametros.php');
		
		echo "<h1>Escolha uma das opções:</h1>";
		
		foreach ($animais as $valor) {
			
			echo "<a href='final.php?categoria=" . $_GET['categoria'] . "&opcao=". $valor . "'>". $valor . "</a><br>";
			
		}
		
    }   
	
	if ($_GET['categoria'] == "Flores"){
		
		require('parametros.php');
		
		echo "<h1>Escolha uma das opções:</h1>";
		
		foreach ($flores as $valor) {
			
			echo "<a href='final.php?categoria=" . $_GET['categoria'] . "&opcao=". $valor . "'>". $valor . "</a><br>";
			
		}
		
	}
	
}

?>