<?php
session_start();
$name = $_Session['name'];

$File=fopen("../bd/avaliacoes.txt","r");


fwrite($File, $name . "," . $_POST['Amb'] . "," . $_POST['Fam'] . "," . $_POST['Lim'] . "\n");

fclose($File);
