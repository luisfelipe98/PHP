<?php

function SQL ($resource, $tabela) {
		
	while ($resul = odbc_fetch_array($resource)) {
		
		echo $resul['ID'];
		
	}
	
}

$nome_tabela = "Usuarios";
$sucesso = odbc_exec($conexao, "SELECT * FROM " . $nome_tabela);

SQL ($sucesso, $nome_tabela);







?>