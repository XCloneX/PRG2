<?php
$File=fopen("../bd/avaliacoes.txt","r");
$sum = array();

//$Line= fgetcsv($File,4096)

//$sum = explode(',',$Line);
//array_push($s,$sum[3]);
//$cenas = array_sum($s);
//echo "$cenas";
$data = fgetcsv($File, 1000, ",");
  $data = array();

  echo array_sum($data);
