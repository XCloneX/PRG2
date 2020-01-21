<html>
<head>
</head>
<body>


<?php
    if (count($_POST) == 0) {
        $filename = 'nomedaspessoas.csv';
        $file = fopen($filename,'c+');
        $pessoas = array();
        if ($file != null) {
            while (($line = fgets($file, 4096)) !== FALSE) {
                $pessoas[] = explode(";", $line);
            }
            fclose($file);
        }

?>

<form action="" method="post">
    Pessoa: <select name="id_pessoa">
        <?php
            foreach ($pessoas as $pessoa) {
                echo '<option value="'.$pessoa[0].'">'
                        .$pessoa[1]
                    .'</option>';
            }
        ?>
    </select>

    <input type="submit" value="pesquisar"/>

</form>

<?php } else {

    //aqui é quando é submetido
    $filename = 'historias.csv';
    $file = fopen($filename,'c+');
    $historias = array();
    if ($file != null) {
        while (($line = fgets($file, 4096)) !== FALSE) {
            $historia = explode(";", $line);

            if ($_POST['id_pessoa'] == trim($historia[6])) {
                echo $historia[4] . "<br>";
            }
        }
        fclose($file);
    }
    }

?>
</body>
</html>