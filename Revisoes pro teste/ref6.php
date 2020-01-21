<?php

$filename = 'historias.csv';
$file = fopen($filename,'c+');
$historias = array();
if ($file != null) {
    while (($line = fgets($file, 4096)) !== FALSE) {
        $historia = explode(";", $line);

        //Ver as historias atraves da visibilidade se e publica ou privada
        //if (trim($historia[2]) == 'publica') {
            echo "ID: " . $historia[0] . "<br>";
            echo "Data de Criação: " . $historia[1] . "<br>";
            echo "Visibilidade: " . $historia[2] . "<br>";
            echo "Tipo: " . $historia[3] . "<br>";
            echo "Conteudo: " . $historia[4] . "<br>";
            echo "Anexo: " . $historia[5] . "<br>";
            echo "Autor: " . $historia[6] . "<br>";
            echo "<br><hr><br>";
        }
    }
    fclose($file);
}