<?php
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
