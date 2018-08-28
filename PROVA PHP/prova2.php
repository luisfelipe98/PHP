<?php

function multiplica ($v1, $v2) {
	
	global $resul;
	
	$conta = $v1 * $v2;
	$resul = "O resultado é: ". $conta;
	
	
}

	multiplica(5,5);
	echo $resul;

?>