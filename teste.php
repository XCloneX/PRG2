<?php


$File = fopen("../logingerado.txt","a");
$n=10;

    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    $randomString1 = '';
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString .= $characters[$index];
    }
    for ($i = 0; $i < $n; $i++) {
        $index = rand(0, strlen($characters) - 1);
        $randomString1 .= $characters[$index];
    }

    echo $randomString;
    echo "<br>" ;
    echo $randomString1;


//echo getName($n);


fwrite($File, $randomString . "," . $randomString . "\n");

fclose($File);
