<?php
session_start();
$name = $_SESSION['nome'];

$File=fopen("../bd/avaliacoes.txt","a");


fwrite($File, $name . "," . $_POST['Amb'] . "," . $_POST['Fam'] . "," . $_POST['Lim'] . "\n");

fclose($File);
