<!DOCTYPE html>
<html>
<head>
	<title>Lista-Usuarios:</title>
</head>
<?php
$servidor="localhost";
$usuario="root";
$senha="";
$dbname = "upx";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

$result_usuario= "SELECT * FROM usuario";

$resultado_usuario= mysqli_query($conn, $result_usuario);
while($row_usuario = mysqli_fetch_assoc($resultado_usuario)){
    echo "Nome: ".$row_usuario['nome']. "<br>";
    echo "E-mail: " .$row_usuario['email']. "<br>";
    echo "Senha: " .$row_usuario['senha']. "<br><br> ";
    echo "<a href='editar.php?id=".$row_usuario['id']."'>Editar Usuario</a><br>";
    echo "<a href='excluir.php?id=".$row_usuario['id']."'>Excluir Usuario</a><br><hr>";
}
?>
</html>
