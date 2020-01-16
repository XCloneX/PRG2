<?php
session_start();
$_SESSION['p1'];

$File= fopen('../bd/respostas.txt','a');

if (!empty($_POST['r1']) && !empty($_POST['r2']) && !empty($_POST['r3'])) {
  fwrite($File, $_SESSION['p1'] .",". $_POST['r1'] ."," . $_SESSION['p2'] .",". $_POST['r2'] .",". $_SESSION['p3'] .",". $_POST['r3'] .",");

}

fclose($File);
