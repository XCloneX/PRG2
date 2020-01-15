<?php
session_start();
$name = $_SESSION['nome'];
$i = 1;
$File=fopen("../bd/avaliacoes.txt","a");

fwrite($File, $_POST['value'] . "," . $name . "," . $_POST['Amb'] . "," . $_POST['Fam'] . "," . $_POST['Lim'] . "\n");

fclose($File);
