<?php
$File=fopen('bd/registos.txt','a');


if (empty($_POST['nome']) ) {
  echo "tem que preencher o nome";
}
if (empty($_POST['idade']) ) {
  echo "tem que preencher a idade";
}
if (empty($_POST['sexo']) ) {
  echo "tem que preencher o sexo";
}
if (empty($_POST['email']) ) {
  echo "tem que preencher o email";
}
fwrite($File,$_POST['nome'] . ";" .$_POST['idade'] . ";" . $_POST['sexo'] . ";" .$_POST['email'] . ";" );
fclose($File);
