<?php
if (count($_POST) < 0) {
  $File= fopen('pessoas.txt');
  $pessoas = array();
  if ($File != null) {
    while (($line= fgets($File,4000)) !== false) {
      echo "$line";exit;
      $pessoas[] = explode(";", $line);
    }
    fclose($File);
  }
  echo "<pre>";
  print_r($pessoas);
  echo "</pre>";

?>
<form  action="" method="post">
  Pessoa:<select class="" name="id_pessoa">
          <<?php
            foreach ($pessoas as $p ) {
              echo '<option value="'. $p[0].'">'.$p[1].'</option>';
            }
           ?>

  </select>
</form>



<?php } else {
  $File= fopen('registarhistoria.txt','c+');
  $historia= array();
  if ($File != null) {
    while (($line= fgets($File,4000)) !== false) {
      echo "$line";
      $historia[] = explode(";", $line);
      if ( $_POST['id_pessoa'] == trim($historia[6])) {
        echo $historia[4] . "<br>";
      }
    }
    fclose($File);
  }
}
?>
