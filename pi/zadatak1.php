<?php

$db_con = new mysqli('localhost', 'root', '', 'nino_nogic');

function sq($con, $upit){
  $db_upit = $con->prepare($upit);
  $db_upit->execute();
  $db_upit_raw = $db_upit->get_result();
  $db_upit->close();
  while($db_upit_prep = $db_upit_raw->fetch_assoc()){
   $rez[] = $db_upit_prep;
  }
  if(isset($rez))return $rez; else return null;
}

$data = sq($db_con, "SELECT * FROM prodavaonica");

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
      <tr>
        <th>ime artikla</th>
        <th>cijena artikla</th>
        <th>velicina</th>
      </tr>

    <?php foreach ($data as $key => $value): ?>
      <tr>
        <td><?php echo $value["ime_artikla"]; ?></td>
        <td><?php echo $value["cijena_artikla"]; ?></td>
        <td><?php echo $value["velicina_artikla"]; ?></td>
      </tr>
    <?php endforeach; ?>
    </table>
  </body>
</html>
