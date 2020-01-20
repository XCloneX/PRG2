<?php
$File=fopen('registarhistoria.txt','r');
$historias = array();
if ($File != null) {
  while (($line = fgets($File,4000)) !== false) {
    $historias = explode(";", $line);

    if (stristr($historia[3],"ola", true) ) {


            echo "<pre>" . print_r($historia, true) . "</pre>";
          }
        }


}
