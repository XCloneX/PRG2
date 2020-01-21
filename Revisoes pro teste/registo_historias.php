<?php
    $filename = 'historias.csv';
    $file = fopen($filename,'c+');
    $historias = array();
    if ($file != null) {
        while (($historias[] = fgets($file, 4096)) !== FALSE);
        fclose($file);
    }

    $id_historia = count($historias);

    //Verifica se o campo data foi preenchido
    if (empty($_POST["data"])) {
        echo "É obrigatório preencher a data.";
        exit;
    }

    if (!isset($_POST["visibilidade"])) {
        echo "Não percebeu a visibilidade.";
        exit;
    }

    if (empty($_POST["tipo"])) {
        echo "É obrigatório selecionar o tipo.";
        exit;
    }

    if (empty($_POST["conteudo"])) {
        echo "É obrigatório preencher o conteudo.";
        exit;
    }

    //Escreve no ficheiro csv os campos do formulario html
    $file = fopen($filename,'a'); //esse 'a' apend vai acrescentar um nome no fim do ficheiro
    fwrite($file, $id_historia . ';' . $_POST['data'] . ';' . $_POST['visibilidade'] . ';' . $_POST['tipo'] . ';' . $_POST['conteudo'] . ';' . $_POST['anexo'] . ';' . $_POST['autor'] . "\n");
    fclose($file);
    
    echo "Escrita efetuada com sucesso.";
?>