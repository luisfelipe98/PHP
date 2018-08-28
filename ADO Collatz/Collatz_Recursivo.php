<?php

function collatz($valor, $contador){
		
	 while ($valor > 1){
		
	 	if ($valor % 2 == 0){
			
			$valor /= 2;
			return collatz($valor, $contador+1);
			
		} else {
			
			$valor = (($valor * 3) + 1);
			return collatz($valor, $contador+1);
		}
	
}

	return $contador;

}

for ($i = 2; $i <= 1000; $i++){
	
	$resultado = collatz($i, 0);
	$numeros[$i] = $resultado;
	echo $i . " = " . $numeros[$i] . " <br>";	

}

?>