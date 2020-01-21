<?php    
    //aqui é quando é submetido
    $filename = 'nomedaspessoas.csv';
    $file = fopen($filename,'c+');
    $pessoas = array();
    if ($file != null) {
        while (($line = fgets($file, 4000)) !== FALSE) {
            $pessoa = explode(";", $line);
            $pessoas []= $pessoa;
        }
        fclose($file);
    }

    //echo "<pre>" . print_r($pessoas, true) . "</pre>";
        //ler todas as pessoas
        $filename = 'historias.csv';
        $file = fopen($filename,'c+');
        $historias = array();
        if ($file != null) {
            while (($line = fgets($file, 4000)) !== FALSE) {
                $historia = explode(";", $line);
                
                //$historias []= $historia;

                if (trim($historia[6]) != '') {
                    $autor = trim($historia[6]);
                
                    //Procurar autores com mais de 10 anos
                    foreach($pessoas as $p) {
                        if ($p[0] == $autor) {
                            if ($p[3] >= 10) {
                                echo "<pre>" . print_r($p, true) . "</pre>";
                            }
                        }
                    }
                    reset($pessoas);
                }
            }
            fclose($file);
        }


    //Pesquisar as historias com testemunho
    $filename = 'historias.csv';
    $file = fopen($filename,'c+');
    $historias = array();
    if ($file != null) {
        while (($line = fgets($file, 4000)) !== FALSE) {
            $historia = explode(";", $line);

            if (trim($historia[3]) == 'Testemunho') {
                //echo "<pre>" . print_r($historia, true) . "</pre>";
            }
        }
        fclose($file);
    }




    $filename = 'nomedaspessoas.csv';
    $file = fopen($filename,'c+');
    $pessoas = array();
    if ($file != null) {
        while (($line = fgets($file, 4000)) !== FALSE) {
            $pessoa = explode(";", $line);
            $pessoas []= $pessoa;
        }
        fclose($file);
    }


    $filename = 'historias.csv';
    $file = fopen($filename,'c+');
    $historias = array();
    if ($file != null) {
        while (($line = fgets($file, 4000)) !== FALSE) {
            $historia = explode(";", $line);
            $historias []= $historia;

            if (trim($historia[6]) != '') {
                $autor = trim($historia[6]);
            
                //Procurar autores com mais de 10 anos
                foreach($pessoas as $p) {
                    if ($p[0] == $autor) {
                        if ($p[3] > 10) {
                            echo "<pre>" . print_r($historia, true) . "</pre>";
                        }
                    }
                    reset($pessoas);
                }
            }
        }
        fclose($file);
    }
?>