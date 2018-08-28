<?php

// Função recursiva que calcula a multiplicação de dois números

function multi($valor, $numero) {
	
	if ($valor <= 0) {
		
		return 0;
		
	} else if ($valor == 1) {
		
		return $numero;
		
	} else {
		
		return $numero + multi($valor-1, $numero);
		
	}
	
}

// Função recursiva que calcula a divisão de dois números

function divi($valor, $numero) {
	
	if ($valor <= 0) {
		
		return 0;
		
	} else {
		
		return 1 + divi($valor-2, $numero); 
		
	}
	
}

?>