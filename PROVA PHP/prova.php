<?php

function multiplica ($v1, $v2, &$resul) {
	
	$conta = $v1 * $v2;
	$resul = "O resultado é: ". $conta;
	return $resul;
	
}
	multiplica (3, 3, $texto);
	echo $texto;

?>