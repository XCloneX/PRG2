<?php
session_start();

$_SESSION['p1'] = "";
$_SESSION['p2'] = "";
$_SESSION['p3'] = "";
$File = fopen("../bd/perguntas.txt", "r");
$rand = (rand(1,5));
$rand1 = (rand(1,5));
$rand2 = (rand(1,5));
$I = 1 ;
$verificar = False;
while (($Line =fgets($File,4096)) !== false ) {
// Abre o ficheiro, guarda o conteudo na variável line e consequentemente no array perguntas
    //$Perguntas[] =  $Line
    $Perguntas = explode(',' , $Line);

    if ($rand == $Perguntas[0]) {
      echo $Perguntas[1];
      $_SESSION['p1'] = $Perguntas[1];
      echo "<br>";
    }
    if ($rand1 == $Perguntas[0]) {
      $_SESSION['p2'] = $Perguntas[1];
      echo $Perguntas[1];
      echo "<br>";
    }
    if ($rand2 == $Perguntas[0]) {
      $_SESSION['p3'] = $Perguntas[1] ;
      echo $Perguntas[1];
      echo "<br>";
    }
    header('Location:../form/randform.php');
}
