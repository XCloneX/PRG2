<?php

$list1 = array();
$File = fopen("../bd/random.txt","a");
$File2 = fopen("../bd/random.txt","r");
$Visitantes = array();
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

  //  echo $randomString;
    echo "<br>" ;
//    echo $randomString1;

while (($Line =fgets($File2,4096)) !== false ) {
// Abre o ficheiro, guarda o conteudo na variável line e consequentemente no array utilizadores
   $Visitantes[] =  $Line;

}

  $list1 = array("Masculino", "Feminino");
  $list2 = array("África do Sul","Albânia", "Alemanha", "Andorra", "Angola","Anguilla", "Antigua", "Arábia Saudita", "Argentina", "Armênia", "Aruba", "Austrália", "Áustria", "Azerbaijão", "Bahamas", "Bahrein", "Bangladesh", "Bangladesh", "Barbados"
  , "Bélgica", "Benin", "Bermudas", "Botsuana", "Brasil", "Brunei", "Bulgária", "Burkina Fasso", "Botão", "Cabo Verde", "Camarões", "Camboja", "Canadá", "Cazaquistão", "Chade", "Chile", "China", "Cidade do Vaticano", "Colômbia",
  "Congo", "Coréia do Sul", "Costa do Marfim", "Costa Rica", "Croácia", "Dinamarca", "Djibuti", "Dominica", "EUA", "Egito", "El Salvador", "Emirados Árabes", "Equador", "Eritréia", "Escócia", "Eslováquia", "Eslovênia", "Espanha", "Estônia",
  "Etiópia", "Fiji", "Filipinas", "Finlândia", "França", "Gabão", "Gâmbia", "Gana", "Geórgia", "Gibraltar", "Granada", "Grécia", "Guadalupe", "Guam", "Guatemala", "Guiana", "Guiana Francesa", "Guiné-bissau", "Haiti", "Holanda",
   "Honduras", "Hong Kong", "Hungria", "Iêmen", "Ilhas  Cayman", "Ilhas Cook", "Ilhas Curaçao", "Ilhas Marshall", "Ilhas Turks & Caicos", "Ilhas Virgens", "Ilhas Wallis e Futuna", "Índia", "Indonésia", "Inglaterra", "Irlanda",
   "Islândia", "Israel", "Itália", "Jamaica", "Japão", "Jordânia", "Kuwait", "Latvia", "Líbano", "Liechtenstein", "Lituânia", "Luxemburgo", "Macau", "Macedônia", "Madagascar", "Malásia", "Malaui", "Mali", "Malta", "Marrocos",
    "Martinica", "Mauritânia", "Mauritius", "México", "Moldova", "Mônaco", "Montserrat", "Nepal", "Nicarágua", "Niger", "Nigéria", "Noruega", "Nova Caledônia", "Nova Zelândia", "Omã", "Palau", "Panamá", "Papua-nova Guiné",
     "Paquistão", "Peru", "Polinésia Francesa", "Polônia", "Porto Rico", "Portugal", "Qatar", "Quênia", "Rep. Dominicana", "Rep. Tcheca", "Reunion", "Romênia", "Ruanda", "Rússia", "Saipan", "Samoa Americana", "Senegal",
     "Serra Leone", "Seychelles", "Singapura", "Síria", "Sri Lanka", "St. Kitts & Nevis", "St. Lúcia", "St. Vincent", "Sudão", "Suécia", "Suiça", "Suriname", "Tailândia", "Taiwan", "Tanzânia", "Togo", "Trinidad & Tobago" ,
      "Tunísia", "Turquia", "Ucrânia", "Uganda", "Uruguai", "Venezuela", "Vietnã", "Zaire", "Zâmbia", "Zimbábue") ;
  $list3 = array("0 - 15", "16 - 24", "25 - 44", "45 - 64" , "65+");
  $list4 = array("Negocio", "Sozinho", "Amigos", "Casal", "Familia");
  $list5 = array("Março - Maio", "Junho - Agosto", "Setembro - Novembro", "Dezembro - Fevereiro");

  print_r($randomString);
  echo "<br>";
  print_r($randomString1);
  echo "<br>";
  print_r( $list1[array_rand($list1)]);
  echo "<br>";
  print_r( $list2[array_rand($list2)]);
  echo "<br>";
  print_r( $list3[array_rand($list3)]);
  echo "<br>";
  print_r( $list4[array_rand($list4)]);
  echo "<br>";
  print_r( $list5[array_rand($list5)]);

echo "<br>";
echo "<br>";
 print_r( $Visitantes);


fwrite($File, $randomString . "," . $randomString1 . "," . $list1[array_rand($list1)] . "," . $list2[array_rand($list2)] . "," . $list3[array_rand($list3)] . "," . $list4[array_rand($list4)]
 . "," . $list5[array_rand($list5)] . "\n");

fclose($File);
