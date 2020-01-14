<?php
/*Sofia Arruda e Filipe Arruda*/

/*Criamos uma function gen_visitante, para gerar o nome atraves do chr que é os caracteres da tabela ascci, que é de 65 até ao 90 (A ao Z)
geramos o genero de 1 a 2, faixa de 1 a 5, geramos o pais através do array paises, começa da posiçao 0.
max_tipos é gerado 1 a 5, pode haver mais que 1 tipo de visitante. 
Tipo de visitante fica vazio, cria um id começado por 0, o id se for menor que o max_tipos adiciona mais 1.
Os tipos sao gerados de 1 a 5 separados por virgulas.
A epoca do ano e gerada de 1 a 4 e o array dá return com o nome, genero, faixa, pais, tipo, epoca.
Abrir o ficheiro paises.txt em modo de c+, se tiver alguma linha que tenha espaços em branco o trim retira.
Fizemos um explode no ficheiro locais.txt.
Fizemos uma funçao generateRating da letra se a letra for A a D atribui 4 e 5, se nao atribui 1,2 ou 3.
Abrimos o ficheiro visitantes.csv e geramos 100 e escrevemos para o ficheiro visitantes.csv e fizemos explode.
Geramos aleatoriamente o dia o mes e o ano e escrevemos para o ficheiro rating.csv. 
E fechamos o php. */

    function gen_visitante($paises) {
        $nome = chr(rand(65,90));
        $genero = rand(1,2);
        $faixa = rand(1,5);
        $pais = $paises[rand(0,count($paises)-1)];
        $max_tipos= rand (1,5);
        $tipo = '';
        for ($i = 0 ; $i <$max_tipos ; $i++) {
            $tipo = $tipo . rand(1,5) . ",";
        }
        $epoca = rand(1,4);
        return array(
        'nome' => $nome,
        'genero' => $genero,
        'faixa' => $faixa,
        'pais' => $pais,
        'tipo' => $tipo,
        'epoca' => $epoca,
        );
    }

    $filename = 'paises.txt';
    $file = fopen($filename,'c+');
    $paises = array();
    if ($file != null) {    
        while( ($line = fgets($file, 4096)) !== false) {
            $paises[] = trim($line);
        }
        fclose($file);
    }

    $filename = 'locais.txt';
    $file = fopen($filename,'r');

    if ($file != null) {    
        while( ($line = fgets($file, 4096)) !== false) {
            $locais[] = explode(";", $line);
        }
    fclose($file);
    }

    function generateRating($letra) {
        
        if (ord($letra)>=65 and ord($letra)<=68) {
            return rand(4,5);
        }
        else {
            return rand(1,3);
        }
    }

    $ultimo_visitante = 1000001;

    $file= fopen('visitantes.csv',"a");
    for ($i = 0; $i < 100; $i++){
        $visitante = gen_visitante($paises); 
        fwrite($file, $ultimo_visitante++ . ";" . $visitante["nome"] . ";" . $visitante["genero"] . ";" . $visitante["faixa"] . ";" . $visitante["pais"] . ";" . $visitante["tipo"] . ";" . $visitante["epoca"] . "\n");
    }
    fclose($file);

    $filename = 'visitantes.csv';
    $file = fopen($filename,'r');

    if ($file != null) {    
        while( ($line = fgets($file, 4096)) !== false) {
            $visitantes[] = explode(";", $line);
        }
    fclose($file);
    }

    $filename = 'rating.csv';
    $file = fopen($filename,'a');

    foreach ($visitantes as $v) {
        $locais_rand = array_rand($locais, 5);
        foreach($locais_rand as $local) {
            $ano = rand(2018, 2020);
            $mes = rand(1, 12);
            $dia = rand(1, 28);
            fwrite($file, $ano . "-" . $mes . "-" . $dia . ";" . $v[0] . ";" . $locais[$local][0] . ";" . generateRating($v[1]) . "\n");
        }
    }
    fclose($file);
?>