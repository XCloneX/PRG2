<?php

session_start();

$_SESSION['username'] = "alexandre";
$_SESSION['password'] = "sousa";

print_r($_SESSION);

?>

<a href="session_redirect1.php">Clique aqui para sair desta página</a>
