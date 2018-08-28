<?php

require ('logado.php');

require ('parametros.php');

echo "<h1>Escolha uma das categorias: </h1>";

foreach ($categoria as $valor) {
	
	echo "<a href=escolhas.php?categoria=". $valor . ">". $valor . "</a><br>";
	
}

if(isset($_GET['categoria']) == "Animais") {
	
	header('Location: escolhas.php');
}

?>