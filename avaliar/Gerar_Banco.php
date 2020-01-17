<?php

session_start();


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_SESSION["nome"];
    $data_insert = $_POST['data'];




    $headernone = TRUE;
    $value = array();
    if (($handle = fopen("../bd/pontos.txt", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {
            if($headernone){
                $headernone = FALSE;
                continue;
            }
            array_push($value,$data[0]);
        }
    }






    $csvFile = "../bd/respostasAle.txt";
    $fh = fopen($csvFile, 'a') or die("can't open file");
    for($c = 0;$c<round(count($value)*0.6);$c++){
        if($nome[0] == "J"){
            fputcsv($fh,array($nome,$value[rand(0,count($value)-1)],rand(4,5),$data_insert),";" );
        }
        else{
           fputcsv($fh,array($nome,$value[rand(0,count($value)-1)],rand(1,3),$data_insert),";" );
        }

    }



}

echo "Avalição adicionada!";
header('Location:../logado/LogadoPontosInteresse.html');


?>
