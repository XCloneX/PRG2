<?php

$filename = 'historias.csv';
$file = fopen($filename,'c+');
$historias = array();
if ($file != null) {
    while (($line = fgets($file, 4000)) !== FALSE) {
        $historia = explode(";", $line);
        $historias[] = $historia;

        if (trim($historia[4]) != '') {
            $conteudo = trim($historia[4]);
            
            if (strstr($conteudo, 'ola'))
        }
        }
    }
    fclose($file); 
}
echo "<pre>" . print_r($historia, true) . "</pre>";


?>