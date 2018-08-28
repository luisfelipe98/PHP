<html>
<head>
	<meta charset="UTF-8">
	<title>Tela de Login</title>
</head>
<body>
	<form method="POST" action="novo.php" enctype="multipart/form-data">
		<p>Arquivo: <input type="file" name="arquivo"></p>
		<p><input type="submit" value="Enviar"></p>
	</form>
</body>
</html>

<?php

$tamanho = $_FILES['arquivo']['size'];

if ($tamanho > 1024 * 1024) {
	
	echo "O arquivo é maior que 1 MB";
	
} else{
	
	echo "A imagem é do tipo ". $_FILES['arquivo']['type'] . " e tem tamanho " . $tamanho;
	
}



?>