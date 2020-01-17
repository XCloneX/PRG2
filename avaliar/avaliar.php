<?php
session_start();
$name = $_SESSION['nome'];
$i = 1;
$File=fopen("../bd/avaliacoes.txt","a");
<<<<<<< HEAD
=======

$File2= fopen('../bd/respostas.txt','a');

if (!empty($_POST['r1']) && !empty($_POST['r2']) && !empty($_POST['r3'])) {
  fwrite($File2, $_SESSION['p1'] .",". $_POST['r1'] ."," . $_SESSION['p2'] .",". $_POST['r2'] .",". $_SESSION['p3'] .",". $_POST['r3'] .",");
  fwrite($File, $_POST['value'] . "," . $name . "," . $_POST['Amb'] . "," . $_POST['Fam'] . "," . $_POST['Lim'] . "\n");
session_unset();
session_destroy();
}
>>>>>>> 3ba687b5a0acefddf0fb4be6544e331e7abb849c


fclose($File);
