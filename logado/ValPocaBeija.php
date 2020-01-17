<!DOCTYPE html>
<?php
  session_start();
 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <style>

    .content {
      text-align: center;
    }

    </style>
  </head>
  <body>
    <div class="content">
      <?php echo $_POST['ValPocaBeija'] ?>
    1.Poça da Dona Beija <br>
    Concelho:Povoação <br>
    Coordenas GPS:<a href="https://www.google.com/maps/place/Po%C3%A7a+da+Dona+Beija/@37.7693522,-25.3215517,17z/data=!4m13!1m7!3m6!1s0x0:0x0!2zMzfCsDQ2JzA5LjciTiAyNcKwMTknMDkuNyJX!3b1!8m2!3d37.769348!4d-25.319363!3m4!1s0xb5d204fd4ff7497:0xf57d47bd7f436b77!8m2!3d37.7693949!4d-25.3193477?hl=en">37.769348, -25.319363 </a><br>
    <img src="../img/pocabeija.jfif " width="280" height="125"><br>
    Avalia
    <form class="" action="../avaliar/avaliar.php" method="post">
    Ambiente:<select class="Ambiente" name="Amb">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
    </select><br>
    Familiar:<select class="Familiar" name="Fam">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
    </select><br>
    Limpeza:<select class="Limpeza" name="Lim">
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>
    </select>

    <input type="submit">
    <input type="reset">

  </form>
  <a href="../form/gerarperg.php">Questionario</a>
</div>
  </body>
</html>
