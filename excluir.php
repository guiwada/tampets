<?php
$servidor="localhost";
$usuario="root";
$senha="";
$dbname = "upx";
$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);$id = $_GET['id'];

$sql = "DELETE FROM usuario WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "Usuário excluído com sucesso. <br>";
    echo "<a href='listar.php'>Voltar para a lista de usuários</a>";
} else {
    echo "Erro ao excluir usuário: " . mysqli_error($conn);
}

mysqli_close($conn);
?>