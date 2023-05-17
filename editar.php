<?php
// Configuração de banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$dbname = "upx";

// Conexão com o banco de dados
$conn = mysqli_connect($servidor, $usuario, $senha, $dbname);

// Verificar se a conexão foi estabelecida corretamente
if (!$conn) {
    die("Erro na conexão com o banco de dados: " . mysqli_connect_error());
}

// Verificar se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Coletar informações do formulário
    $id = $_POST["id"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    // Atualizar informações do usuário no banco de dados
    $sql = "UPDATE usuarios SET nome='$nome', email='$email', senha='$senha' WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo "Usuário atualizado com sucesso";
    } else {
        echo "Erro ao atualizar usuário: " . mysqli_error($conn);
    }

    // Fechar conexão com o banco de dados
    mysqli_close($conn);
} else {
    $id = $_GET['id'];
    // Selecionar informações do usuário no banco de dados
    $sql = "SELECT * FROM usuario WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
?>

        <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>">
            Nome: <input type="text" name="nome" value="<?php echo $row["nome"]; ?>"><br>
            E-mail: <input type="email" name="email" value="<?php echo $row["email"]; ?>"><br>
            Senha: <input type="password" name="senha" value="<?php echo $row["senha"]; ?>"><br>
            <input type="submit" value="Atualizar">
        </form>

<?php
    } else {
        echo "Usuário não encontrado";
    }
}
?>
