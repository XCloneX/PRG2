<?php
session_start();
    // Declaração de variáveis
$FileName ="../bd/visitantes.txt";
$File = fopen($FileName,"r");
$Nome = ($_POST['name']);
$Password = ($_POST['pw']);
$Verdade = false;
$_Session['nome'] = $_POST['name'];

while (($Line = fgets($File,4096)) !== false ) {
// Verifica a existencia do utilizador enquanto percorre o ficheiro  e guarda o seu conteudo em um array
    $Utilizador = explode(',' , $Line);

    if ($Utilizador[1] == $Nome and $Utilizador[7] == $Password) {
        $Verdade = true;
        break;
    }
}
    if ($Verdade == false) {
// Mensagem de erro caso o utilizador não exista ou as credenciais não corespondem
    echo "Este utilizador não se encontra registado/As credenciais nao correspondem";
} else {
// Se econtrar o utilizador, abre o ficheiro assiduidade e verifica a sua entrada/saida
  /*  $F = fopen($FileName2,'r');
    $Operacao = '';

while (($Line = fgets($F,4096)) !== false ) {
    $Tok = explode(',' , $Line);
// Guarda numa variavel se o utilizador registado entrou ou saiu, consoanate o formulario
    if ($Tok[0] == $Nick) {
        $Operacao = $Tok[2];
    }
}

if ($Operacao == $Radio) {
    // impede o utilizador de entrar ou sair duas vezes de seguida
    echo "Erro entrada ou saida repetida";
    exit;
}

if ($Hora>5 && $Hora<11) {
// Mostrar no ecrã uma mensagem com o nick do utilizador juntamente com um cumprimento consoante a hora do dia e se está a entrar ou a sair do trabalho
    if ($Radio == "in") {
        echo "<br><br> Bom Dia $Nick " . date('H:i') ."<br> Bom Trabalho";
    } else {
        echo "<br><br> Bom Dia $Nick " . date('H:i') . "<br> Bom Descanso";
    }
}

if ($Hora>11 && $Hora<19) {

    if ($Radio == "in") {
        echo "<br><br> Boa Tarde $Nick " . date('H:i') . "<br> Bom Trabalho ";
    }
    if ($Radio == "out") {
        echo "<br><br> Boa Tarde $Nick " . date('H:i') . "<br> Bom Descanso ";
    }
} else {

    if ($Radio == "in") {
        echo "<br><br> Boa Noite $Nick " . date('H:i') . "<br> Bom Trabalho ";
    }
    if ($Radio == "out") {
        echo "<br><br> Boa Noite $Nick " . date('H:i') . "<br> Bom Descanso ";
    }
}
  fwrite($File2, ($_POST['nick']) .",". $HoraDePonto . "," . $Radio . "," . "\n");
//Escreve no ficheiro da assiduidade o utilizador, a hora de ponto e entrou ou saiu
*/
header('Location:../logado/LogadoPontosInteresse.html');
}

fclose($File2);
fclose($File);
