<?php

  if(isset($_POST["datum"])){
    preg_match("[0-9]{1,2}[/.][0-9]{1,2}[/.][0-9]{4}", $_POST["datum"]);
  }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="provjera_datumi.php" method="post">
      <label for="datum">Unesi datum u formatu dd/mm/yyyy</label>
      <input type="text" name="datum" value="">
      <input type="submit" name="" value="Unesi">
    </form>

  </body>
</html>
