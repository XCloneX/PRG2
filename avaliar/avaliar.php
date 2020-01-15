<?php
session_start();
$name = $_SESSION['nome'];
$i = 1;
$File=fopen("../bd/avaliacoes.txt","a");
<<<<<<< HEAD
=======

>>>>>>> 0ce108dcc4fe2eea4fd0b99e7806a6bb030d39fa

fwrite($File, $_POST['value'] . "," . $name . "," . $_POST['Amb'] . "," . $_POST['Fam'] . "," . $_POST['Lim'] . "\n");

fclose($File);
