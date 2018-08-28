<?php

echo "<h1>P&aacute;gina de Valida&ccedil;&atilde;o</h1>";

echo "<h2>Insira seus dados nos campos abaixo:</h2>";

echo "<form method='POST' action='funcoes.php'>
	  <label>CPF: <input type='number' name='cpf'></label><br><br>";

echo "<label>Escreva um texto: </label><br><br>";

echo "<label><textarea rows='15' cols='40' name='texto'></textarea></label><br><br>";

echo "<label>Tamanho do texto: <input type='text' name='tamanho_texto'></label><br><br>";

echo "<label>CEP: <input type='number' name='cep'></label><br><br>";

echo "<label>Opções: </label>";

echo "<label><input type='text' name='opcao' placeholder='Só digite 0 ou 1'></label><br><br>";

echo "<label>Data: <input type='number' name='data' placeholder='DDMMYYYY'></label><br><br>";

echo "<label>CNPJ: <input type='number' name='cnpj'></label><br><br>";

echo "<label>Número do Cartão de Crédito: <input type='number' name='numero_cartao' placeholder='Digite 16 números'></label><br><br>";

echo "<label><input type='submit' value='Enviar'></form></label>";

?>