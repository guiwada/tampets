<?php
$servidor="localhost";
$usuario="root";
$senha="";
$dbname = "upx";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);


// Verifique se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtenha os dados do formulário
  $senha = $_POST['senha'];
  $nome = $_POST['nome'];

  // Consulte o banco de dados para verificar se as informações de login estão corretas
  $query = "SELECT * FROM usuario WHERE nome='$nome' AND senha='$senha'";
  $result = mysqli_query($conn, $query);

  // Verifique se houve um resultado correspondente
  if (mysqli_num_rows($result) > 0) {
    // Informações de login corretas - redirecione para a página de destino
    header("location:teste.php$nome=$nome");
    exit();
  } else {
    // Informações de login incorretas - exiba uma mensagem de erro
    header("Location: formulariologin.php?erro=1&mensagem=");

  }
}
?>
