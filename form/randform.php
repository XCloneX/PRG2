<!DOCTYPE html>
<?php
session_start();

?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="../form/guardarform.php" method="post">
      <?php  print_r($_SESSION['p1']) ?><br>
      <input type="text" name="r1" value=""><br>
      <?php  print_r($_SESSION['p2']) ?><br>
      <input type="text" name="r2" value=""><br>
      <?php  print_r($_SESSION['p3']) ?><br>
      <input type="text" name="r3" value=""><br>
      <input type="submit"><input type="reset">
    </form>

  </body>
</html>
