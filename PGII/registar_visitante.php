<?php
    
    /*Sofia Arruda e Filipe Arruda*/

    /* Abrimos o php. 
    Utilizamos o id para começar a numerar do 1000001.
    Abrimos o ficheiro visitantes.csv e abrimos em modo c+ para ler, escrever e criar o ficheiro para ler linha por linha os utilizadores.
    Através do fgets lemos linha a linha se for diferente de falso então ele adiciciona mais uma id.
    Fechamos o ficheiro.
    Transformamos o array do tipo_visitante para uma string.
    Abrimos o ficheiro em modo apend(escrevemos  no ficheiro csv os campos do formulario html).
    O ficheiros escreve o id do visitante, separados por pontos e virgulas os POST. O post nome, genero, faixa,
    pais, tipo e epoca. 
    /n no final para começar a ler e a escrever na proxima linha e finalizar a leitura.
    Fechamos o ficheiro.
    Definimos a data e a hora, de acordo com a do computador.
    Escrevemos no ficheiro rating.csv 5 linhas com a data, o id do visitante, o local, e o rating.
    Fechamos o ficheiro.
    E manda um echo de Escrita efetuada com sucesso.
    Fechamos o php.
    */

    $id_visitante = 1000001;
    $filename = 'visitantes.csv';
    $file = fopen($filename,'c+');
    $visitantes = array();
    while( ($visitantes[] = fgets($file, 4096)) !== false){
        $id_visitante++;
    }
    fclose($file);

    $tipo_visitante = implode("," , $_POST["tipo_visitante"]);

    $file = fopen($filename, 'a');
    fwrite($file, $id_visitante . ";" . $_POST['nome'] .";" . $_POST['genero'] . ";" . $_POST['faixa'] . ";" . $_POST['pais'] . ";" . $tipo_visitante . ";" . $_POST['epoca'] . "\n");
    fclose($file);

    $data = date('Y-m-d H:i:s');

    $filename="rating.csv";
    $file = fopen($filename, 'a');
    fwrite($file, $data . ';' . $id_visitante . ";" . $_POST['local1'] . ";" . $_POST['rating_local1'] . "\n");
    fwrite($file, $data . ';' . $id_visitante . ";" . $_POST['local2'] . ";" . $_POST['rating_local2'] . "\n");
    fwrite($file, $data . ';' . $id_visitante . ";" . $_POST['local3'] . ";" . $_POST['rating_local3'] . "\n");
    fwrite($file, $data . ';' . $id_visitante . ";" . $_POST['local4'] . ";" . $_POST['rating_local4'] . "\n");
    fwrite($file, $data . ';' . $id_visitante . ";" . $_POST['local5'] . ";" . $_POST['rating_local5'] . "\n");
    fclose($file);

    echo "Escrita efetuada com sucesso";
?>