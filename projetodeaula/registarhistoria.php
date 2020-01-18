<?php
$File=fopen('bd/registarhistoria.txt','a');


if (empty($_POST['data']) ) {
  echo "tem que preencher a data";
}
if (empty($_POST['visibilidade']) ) {
  echo "tem que preencher a visibilidade";
}
if (empty($_POST['tipo']) ) {
  echo "tem que preencher o tipo";
}
if (empty($_POST['historia']) ) {
  echo "tem que preencher o historia";
}
if (empty($_POST['autor']) ) {
  echo "tem que preencher o autor";
}
fwrite($File,$_POST['data'] . ";" . $_POST['visibilidade'] . ";" . $_POST['tipo'] . ";" . $_POST['historia'] . ";" . $_POST['autor'] . ";");
fclose($File);
