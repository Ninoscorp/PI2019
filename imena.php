<?php

$imena = array("Homislav Torvat", "Bereza Tilic", "Fea Rrankovic", "Zna Aninovic", "Kartol Bosovic", "Vatrik Pukovic", "Pino Davlekovic", "Rero Pumiha", "Sonika Mtracenski", "Klberto Arim", "Suka Lavic", "Gntonela Aale", "Iosip Jlijevic");
for($i = 0; $i<sizeof($imena);$i++){
  $drugapos = strpos($imena[$i], " ")+1;
  echo $imena[$i]." je ".$imena[$i][0].".".$imena[$i][$drugapos].". <br>";
  }
  /*
  $imena = array("Homislav Torvat", "Bereza Tilic", "Fea Rrankovic", "Zna Aninovic", "Kartol Bosovic");

  for($i = 0; $i<sizeof($imena);$i++){
  preg_match_all( '/[A-Z]/', $imena[$i], $matches);
  echo $matches[$i][0]. ".". $matches[$i][1].".";
  echo "<br>";
  }*/

 ?>
