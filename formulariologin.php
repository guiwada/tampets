<!DOCTYPE html>
<html>
<head>
	<title>Formulário de Login</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<h1 class="titulo">Formulário de Login</h1>
	<form method="POST" action="login.php" class="formulario">
	<?php
		if (isset($_GET['erro']) && $_GET['erro'] == 1) {
			echo "<p>Usuário ou senha incorretos. Tente novamente.</p>";
		}
		?>
		<label>Nome de Usuário:</label>
		<input type="text" name="nome" placeholder="Digite seu nome">

		<label>Senha:</label>
		<input type="password" name="senha" placeholder="Digite sua senha">

		<input type="submit" value="Entrar" class="botao">
	</form>
</body>
</html>
