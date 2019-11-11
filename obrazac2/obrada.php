<?php
function out($_var){
  echo $_var."<br>";
}
out("Ime: ".$_POST["ime"]);
out("Prezime: ".$_POST["prezime"]);
out("Godina rođenja: ".$_POST["datum"]);
out("Obrazovanje: ".$_POST["skola"]);
out("Adresa: ".$_POST["adresa"]);
out("Grad: ".$_POST["grad"]);
out("Spol :".$_POST["spol"])
out("Odabrali ste hobije: ");
foreach ($_POST["hobiji"] as $value) {
  out($value);
}
out("Napomena: ".$_POST["napomena"]);
if($_POST["skola"]=="Gimnazija" && count($_POST["hobiji"])==3)out("Super!");
if($_POST["skola"]=="Strukovna" && count($_POST["hobiji"])==2)out("Bravo!!!!");
 ?>
