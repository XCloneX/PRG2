<?php
$File=fopen('registarhistoria.txt','r');
$historias = array();
if ($file!= null) {
  while (($line = fgets($File,4000)) !== false) {
    $historias = explode(";", $line);

    $historia[] = $historia;

    if (trim($historia[6]) != '') {
      $autor = trim($historia[6]);
      foreach ($pessoa as $p) {
        if ($p[0] == $autor) {
          if ($p[3]>= 10) {
            echo "<pre>" . print_r($p, true) . "</pre>";
          }
        }
      }
      reset($pessoa);
    }
  }
}
