<?php
$imena =  array("OwO", "Pero", "Ayaya");
$predmeti = array("Matematika","Fizika", "Hrvatski");
$ocjene = array("OwO" => array("Matematika"=>2,"Fizika"=>5,"Hrvatski"=>3),
                "Pero" => array("Matematika"=>5,"Fizika"=>3,"Hrvatski"=>4),
                "Ayaya" => array("Matematika"=>1,"Fizika"=>4,"Hrvatski"=>2));
foreach ($ocjene as $key => $value) {
  echo "$key";
  echo "<br>";
  echo "$predmeti[0]". " je ". $value[$predmeti[0]]."<br>";
  echo "$predmeti[1]". " je ". $value[$predmeti[1]]."<br>";
  echo "$predmeti[2]". " je ". $value[$predmeti[2]]."<br>";
  echo "<br><br><br><br>";

}


?>
