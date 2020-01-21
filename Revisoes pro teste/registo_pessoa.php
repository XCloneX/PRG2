<?php
    $filename = 'nomedaspessoas.csv';
    $file = fopen($filename,'c+');
    $pessoas = array();
    if ($file != null) {
        while (($pessoas[] = fgets($file, 4096)) !== FALSE);
        fclose($file);
    }

    $id_pessoa = count($pessoas);

    //Verifica se o campo nome foi preenchido
    if (empty($_POST["name"])) {
        echo "É obrigatório preencher o nome.";
        exit;
    }

    if (empty($_POST["idade"])) {
        echo "É obrigatório preencher a idade.";
        exit;
    }

    if (!isset($_POST["sexo"])) {
        echo "É obrigatório selecionar o sexo.";
        exit;
    }

    if (empty($_POST["email"])) {
        echo "É obrigatório preencher o email.";
        exit;
    }

    // abrir o ficheiro de trabalhadores para gravar os dados de um novo trabalhador
    $file = fopen($filename,'a'); //esse 'a' apend vai acrescentar um nome no fim do ficheiro
    fwrite($file, $id_pessoa . ';' . $_POST['name'] . ';' . $_POST['namef'] . ';' . $_POST['idade'] . ';' . $_POST['sexo'] . ';' . $_POST['email'] . "\n");
    fclose($file);
    
    echo "Escrita efetuada com sucesso.";
?>