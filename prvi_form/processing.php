<?php

function out($_var){
  echo $_var."<br>";
}
out($_POST["ime"]);
out($_POST["prezime"]);
if($_POST["skola"]=="da"){
  out("Idete u skolu");
}else{
  out("Ne idete u skolu");
}
out("OIB je: ". $_POST["oib"]);
out("Najdraza boja vam je: ".$_POST["boja"]);
out("Odabrali ste predmete: ");
foreach ($_POST["predmeti"] as $value) {
  out($value);
}
 ?>
