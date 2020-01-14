<?php
<<<<<<< HEAD

$File=fopen("../bd/avaliacoes.txt","r");

$Line= fgetcsv($File,4096) ;
$sum = [$Line[1],$Line[2],$Line[3]] ;
$avaliacao = round((array_sum($sum)/count($sum)), 1);
echo $avaliacao;
=======
$File=fopen("../bd/avaliacoes.txt","r");
$csv= "../bd/avaliacoes.txt";
//$sum = array();

//$Line= fgetcsv($File,4096)

//$sum = explode(',',$Line);
//array_push($s,$sum[3]);
//$cenas = array_sum($s);
//echo "$cenas";
//$data = fgetcsv($File, 1000, ",");
//  $data = array();

  //echo array_sum($data);

  function getCSV($csv){
      $file = fopen($csv, 'r');
      while (!feof($file) ) {
          $lines[] = fgetcsv($file, 1024);
      }
      fclose($file);
      return $lines;
  }

  $csv = getCSV($argv[2]);
  foreach ($csv as $values) {
      $row1[] = $values[0];
  }
  print_r($row1);
>>>>>>> 2be9df551a20728e69470e71adaa4392285affcb
