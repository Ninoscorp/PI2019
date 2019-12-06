<?php

$yolo = array(
  "Bilic Tereza",
  "Cepo Cvitan Luka",
  "Frankovic Rea",
  "Gale Antonela",
  "Horvat Tomislav",
  "Ilijevic Josip",
  "Kerim Alberto",
  "Kosovic Bartol",
  "Kupresak Marko",
  "Matic Jan",
  "Nogic Nino",
  "Pavlekovic Dino",
  "Rodic Tin",
  "Rumiha Petar",
  "Savic Luka",
  "Stracenski Monika",
  "Saric Matej",
  "Skrlec Luka",
  "Splajt Renato",
  "Vlatkovic Josip",
  "Vukovic Patrik",
  "Zaninovic Ana" );

  $ime = $_POST["ime"];

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php if(isset($ime)) echo $ime; else{?>
      <form class="" action="provjera.php" method="post">
        <label for="ime">Ime i prezime</label>
        <input type="text" name="ime" value="">
        <input type="submit" name="" value="">
      </form>

    <?php } ?>
  </body>
</html>
