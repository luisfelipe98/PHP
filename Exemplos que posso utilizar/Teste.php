<?php

echo "<form method='POST'>";
echo "Digite um número: ";
echo "<input type='text' name='numero'>";
echo "<input type='submit' value='Enviar'></form>";

?>

<?php

$numero = $_POST['numero'];
$d = 100;
//echo $numero[0];
for ($i = 3; $i >= 1; $i--) {
	
	//echo $d;
	$divisao = (int) ($numero / $d); // Calcula o resto
	$numero = $numero % $d;  // Calcula o módulo do número
	
	echo $divisao . "   ";
	
	$d /= 10;
}

//echo round(123 / 100);


?>