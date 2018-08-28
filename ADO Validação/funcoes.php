<?php

$cpf = $_POST['cpf'];
$texto = $_POST['texto'];
$tam = $_POST['tamanho_texto'];
$cep = $_POST['cep'];
$opcao = $_POST['opcao'];
$data = $_POST['data'];
$cnpj = $_POST['cnpj'];
$cartao = $_POST['numero_cartao'];

function valida_cpf($cpf){
	
	 $tamCPF = strlen($cpf); //Vê o tamanho de uma String
	 $pad = ""; // Acresenta os zeros restantes para completar o número do CPF
	 $cpf_atualizado = ""; //Variável que armazena o CPF "atualizado"
	 $entrou = false; // Variável boleana avaliando se entrou no primeiro if da função	
	 
		if ($tamCPF < 11) {
			
			for ($i = 0; $i <= 10 - $tamCPF; $i++){

				$pad[$i] = 0;

			}

			$cpf_atualizado = $pad.$cpf;
			$entrou = true;

		}		
		
		if ( ($cpf[0] == $cpf[1]) && ($cpf[1] == $cpf[2]) && ($cpf[2] == $cpf[3]) && ($cpf[3] == $cpf[4]) && ($cpf[4] == $cpf[5]) 
		&& ($cpf[5] == $cpf[6]) && ($cpf[6] == $cpf[7]) && ($cpf[7] == $cpf[8]) && ($cpf[8] == $cpf[9]) && ($cpf[9] == $cpf[10]) ) {
	
			return "Falso";

	    }
	
		if ($entrou == true) {
	 
			$cpf = $cpf_atualizado; // Salvando o "novo número" de CPF
			
		}
		
	 $soma = 0;	
		
		for ($i = 0, $j = 10; $i <= 8, $j >= 2; $i++, $j--) {
			
			$soma += ($cpf[$i] * $j);
			
		}
		
	 $resto1 = ($soma * 10) % 11;

	 $soma = 0;
		
		for ($i = 0, $j = 11; $i <= 9, $j >= 2; $i++, $j--) {
			
			$soma += ($cpf[$i] * $j);
			
		}
		
	 $resto2 = ($soma * 10) % 11;

		if (($resto1 == 10) &&($resto2 == 10)) {
		
			$resto1 = 0;
			$resto2 = 0;
			
		} elseif ($resto1 == 10) {
		
			$resto1 = 0;
		
		} elseif ($resto2 == 10) {
		
			$resto2 = 0;	
		
		}	
	
		if (($resto1 == $cpf[9]) && ($resto2 == $cpf[10])) {
		
			return "Válido";
		
		} else {
		
			return "Falso";
		
		} 
	
}

function valida_comprimento_texto($texto, $tam){
	
	strlen($texto);
	
	if (strlen($texto) <= $tam) {
		
		return "Válido";
		
	}else{
		
		return "Inválido";
		
	}
	
}

function valida_cep($cep, $opcao) {
	
	if ($opcao == 0) {
		
		if ((is_numeric($cep)) && (strlen($cep) == 8)) {
	
			return "Válido";
	
		}else{
	
			return "Inválido";
	
		}	
		
	}else{
		
		$novo_cep = wordwrap($cep, 5, "-", true);
		return $novo_cep;
		
	}
	
}

function valida_data($data) {
	
	$dia = $data[0].$data[1];
	$mes = $data[2].$data[3];
	$ano = $data[4].$data[5].$data[6].$data[7];

	switch ($dia) {
	
		case (($dia > 31) || ($dia <= 00)) :

			return "Inválida";
			break;	
		
		case 29:
	
			if (($mes <= 00) || ($mes > 12)) {
			
				return "Inválida";
				break;
				
			} else if ($mes == 02) {
			
				if (($ano % 4 == 0) && ($ano % 100 != 0)) {
				
					return "Válida";
					break;
					
				} else if ($ano % 400 == 0) {
				
					return "Válida";
					break;
					
				} else {
				
					return "Inválida";
					break;
					
				}
			
			} else {
			
				return "Válida";
				break;
			
			}
		
		case 31:
	
			if ((($mes == '01') || ($mes == '03') || ($mes == '05') || ($mes == '07') || ($mes == '08') || ($mes == '10') || 
			($mes == '12'))) {
		
				return "Válida";
				break;
		
			}else{
			
				return "Inválida";
				break;
					
			}
	
		default :
	
			if (($mes <= 00) || ($mes > 12)) {
			
				return "Inválida";
				break;
				
			}else{
			
				return "Válida";
				break;
			
			}
	
}

}

function valida_cnpj($cnpj) {
	
	$digito_verificador1 = $cnpj[12];
	$digito_verificador2 = $cnpj[13];

	$soma = 0;

	for ($i = 0, $j = 5; $i <= 11, $j >= 2; $i++, $j--){
	
		$soma += ($cnpj[$i] * $j); 
	
	}

	for ($i = 4, $j = 9; $i <= 11, $j >= 2; $i++, $j--){
	
		$soma += ($cnpj[$i] * $j); 
	
	}

	$resto = $soma % 11;

	if ($resto % 11 < 2) {
		
		$valor_digito1 = 0;
	
	}else {
	
		$valor_digito1 = 11 - $resto;
		
	}

// Segundo Dígito //

	$soma = 0;

	for ($i = 0, $j = 6; $i <= 12, $j >= 2; $i++, $j--){
	
		$soma += ($cnpj[$i] * $j); 

	}

	for ($i = 5, $j = 9; $i <= 12, $j >= 2; $i++, $j--){
	
		$soma += ($cnpj[$i] * $j); 
	
	}

	$resto = $soma % 11;

	if ($resto % 11 < 2) {
	
		$valor_digito2 = 0;
	
	}else {
	
		$valor_digito2 = 11 - $resto;
		
	}

	if (($valor_digito1 == $digito_verificador1) && ($valor_digito2 == $digito_verificador2)){
	
		return "Válido";
	
	}else {
	
		return "Inválido";
	
	}	
	
} 

function valida_cartao($cartao) {
	
	$soma = 0;
	for ($i = 0; $i <= 14; $i+=2){
	
		$validar = 0;
		$validar = ($cartao[$i] * 2);
	
			if ($validar >= 10){
		
				$soma += ($validar - 9);
		
			}else{
		
				$soma += $validar;
		
			}
	
}

for ($i = 1; $i <= 14; $i+=2){	
	
	$soma += $cartao[$i];
	
}

if (($soma + $cartao[15]) % 10 == 0) {
	
	return "Válido";
		
}else{
	
	return "Inválido";
	
}
	
}


echo "O CPF " . $cpf . " é " .valida_cpf($cpf) . ".<br>";
echo "O texto é " . valida_comprimento_texto($texto, $tam) . ".<br>";
echo "O CEP é " . valida_cep($cep, $opcao) . ".<br>";
echo "A data " . $data . " é " . valida_data($data) . ".<br>";
echo "O CNPJ " . $cnpj . " é " . valida_cnpj($cnpj) . ".<br>";
echo "O Cartão " . $cartao . " é " . valida_cartao($cartao) . ".<br>";

?>