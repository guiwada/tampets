<?php
$servidor="localhost";
$usuario="root";
$senha="";
$dbname = "upx";

$id = $_GET['id'];
$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);

$sql = "DELETE FROM usuario WHERE id = $id";
if (mysqli_query($conn, $sql)) {
    echo "Usuário excluído com sucesso. <br>";
    echo "<a href='listar.php'>Voltar para a lista de usuários</a>";
    mysqli_close($conn);
} else {
    echo "Erro ao excluir usuário: " . mysqli_error($conn);
}
?>