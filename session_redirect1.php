<?php
session_start();

echo "Array de sessao <br>";
echo "<pre>";
print_r($_SESSION);
echo "<pre>";

if (!isset($_SESSION['username'])) {
  echo "Amigo ,tendes que iniciar uma sessao <br>";
  exit;
}
echo "ola meu bom amigo " . $_SESSION['username'];
?>
 Agora se quizeres podes voltar a pagina inicial carregando <a href="sessao2.php">aqui</a> ou entao
<a href="logout.php">terminar sessao</a>!
