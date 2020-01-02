<?php
$FileName = '../bd/visitantes.txt';
$File = fopen($FileName,'r');
$Visitantes=array();
$I=1;

while (($Line =fgets($File,4096)) !== false ) {
// Abre o ficheiro, guarda o conteudo na variável line e consequentemente no array utilizadores
    $Visitantes[] =  $Line;
}

fclose($File);

foreach ($Visitantes as $Visitante) {
    $I++;
}

if (!empty($_POST['name']) && !empty($_POST['nacionalidade']) && !empty($_POST['idade']) && !empty($_POST['TV']) && !empty($_POST['epoca']) && !empty($_POST['checked'])) {
    $File = fopen($FileName, 'a');
    fwrite($File,$I .",". $_POST['name'] .",". $_POST['nacionalidade'] .",". $_POST['idade'] . "," . $_POST['TV'] . "," . $_POST['epoca'] . "," . $_POST['checked'] . "," . "\n");
    fclose($File);
    //header('Location: ../login/login.html');
} else {
    echo "O utilizador tem de preencher todos os campos";
}
