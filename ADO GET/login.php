<!DOCTYPE html>
<html>
<head>
	<meta name="author" content="Luis Felipe">
    <meta name="description" content="Página de Login">
    <meta name="keywords" content="Login, usuário, senha">
    <meta charset="utf-8">
    <title>Página de Login</title>
</head>
<body>
	<header>
    	<h1>Login</h1><hr>
    </header>
    <form method="POST" action="confirma_login.php">
		<label>Usuário:</label>
        <label><input type="text" name="usuario"></label>
		<label>Senha:</label>
        <label><input type="password" name="senha"></label>
        <label><input type="submit" value="Enviar" name="botao"></label>
	</form>
</body>
</html>