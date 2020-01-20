<?php
$File=fopen('registarhistoria.txt','r');
$historias = array();
if ($File != null) {
  while (($line = fgets($File,4000)) !== false) {
    $historias = explode(";", $line);

    if (trim($historia[3]) = 'testemunho') {

            echo "<pre>" . print_r($p, true) . "</pre>";
          }
        }
      reset($pessoa);

}
