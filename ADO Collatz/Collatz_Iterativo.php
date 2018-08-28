<?php

function collatz($valor, $contador){
		
	 while ($valor > 1){
		
	 	if ($valor % 2 == 0){
			
			$valor /= 2;
			
		} else {
			
			$valor = (($valor * 3)+ 1);
			
		}
		
    $contador++;
		
}

	return $contador;

}

for ($i = 2; $i <= 1000; $i++){
	
	$resultado = collatz($i, 0);
	$numeros[$i] = $resultado;
	echo $i . " = " . $numeros[$i] . "<br>";

}

?>