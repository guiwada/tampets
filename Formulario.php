<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Cadastro</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="titulo">Formulário de Cadastro</h1>
	<form method="POST" action="processa.php" class="formulario">
		<label>Nome:</label>
		<input type="text" name="nome" placeholder="Digite seu nome">

		<label>E-mail:</label>
		<input type="email" name="email" placeholder="Digite seu e-mail">

		<label>Senha:</label>
		<input type="password" name="senha" placeholder="Digite sua senha">

		<input type="submit" value="Cadastrar" class="botao">
	</form>
</body>
</html>
