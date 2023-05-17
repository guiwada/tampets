<?php
$servidor="localhost";
$usuario="root";
$senha="";
$dbname = "upx";

$conn = mysqli_connect($servidor,$usuario,$senha,$dbname);


if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // Obtenha os dados do formulário
  $email = $_POST['email'];
  $senha = $_POST['senha'];

  // Consulte o banco de dados para verificar se as informações de login estão corretas
  $query = "SELECT * FROM usuario WHERE email='$email' AND senha='$senha'";
  $result = mysqli_query($conn, $query);

  // Verifique se houve um resultado correspondente
  if ($result && mysqli_num_rows($result) == 1) {
    // Informações de login corretas - redirecione para a página de destino
    $_SESSION['email'] = $email;
    header("Location: ../MainPage/mainpage.php");
    exit();
  } else {
    // Informações de login incorretas - exiba uma mensagem de erro
    header("Location: index.php?erro=1&mensagem=Usuário ou senha incorretos");
    exit();
  }
}

?>
