<?php
$datoteka=fopen("Datoteka.txt","w");
$lol="";
for ($i=0; $i < 10; $i++) {
  $lol .= "aya";
  fwrite($datoteka, $lol."\r\n");
}

fwrite($datoteka, $lol);
fclose($datoteka);
 ?>
