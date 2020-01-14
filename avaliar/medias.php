<?php


$File=fopen("../bd/avaliacoes.txt","r");

$Line= fgetcsv($File,4096) ;
$sum = [$Line[1],$Line[2],$Line[3]] ;
$avaliacao = round((array_sum($sum)/count($sum)), 1);

echo $avaliacao;

fclose($File);
