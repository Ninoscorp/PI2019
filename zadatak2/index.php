<?php


$db_con = new mysqli('localhost', 'root', '', 'stanje_boje');
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
function squ($con, $upit, $param, $vals){
  $db_upit = $con->prepare($upit);
  $db_upit->bind_param($param, ...$vals);
  $db_upit->execute();
  $db_upit->close();
}

$boje = sq($db_con, "SELECT * FROM printer ORDER BY idprinter DESC");
if(isset($_POST["submit"])){
$id = $_POST["id"];
$cyan = $_POST["cyan"];
$zuta = $_POST["zuta"];
$plava = $_POST["plava"];
squ($db_con, "DELETE FROM printer WHERE idprinter=?","i",array($id));
squ($db_con, "INSERT INTO printer (idprinter,cyan,zuta,plava) VALUES (?,?,?,?)", "iiii", array($id,$cyan,$zuta,$plava));
header("Location: index.php");
}

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <style media="screen">
      p { width: 50px; display:inline-block;}
      p2 { width: 120px; display:inline-block;}
    </style>
    <title></title>
  </head>
  <body>
    <form class="" action="index.php" method="post" style="margin:50px 20px; border-radius: 4px; border: 1px solid #000; width:400px; padding:20px;">
      <p2>unesi id printera</p2>  <input type="number" name="id" value="" required><br><br>
      <p2>unesi stanje cyan</p2>  <input type="number" name="cyan" value="" max="100" min="0" required><br><br>
      <p2>unesi stanje žute</p2>  <input type="number" name="zuta" value="" max="100" min="0" required><br><br>
      <p2>unesi stanje plave</p2>  <input type="number" name="plava" value="" max="100" min="0" required><br><br>
      <input type="submit" name="submit" value="Unesi" >
    </form>
    <?php foreach ($boje as $key => $value): ?>
      <form class="" action="index.php" method="post" style="margin:50px 20px; border-radius: 4px; border: 1px solid #000; width:200px; padding:20px;">

      <div class="stanje">
        <?php echo "Printer id:".$value["idprinter"]; ?><br>
        <p>cyan</p>  <progress id="file" value="<?php echo $value["cyan"]; ?>" max="100" style="color: cyan;"> </progress> <br>
        <p>žuta</p>   <progress id="file" value="<?php echo $value["zuta"]; ?>" max="100" style="color: yellow;"> </progress> <br>
        <p>plava</p> <progress id="file" value="<?php echo $value["plava"]; ?>" max="100">  </progress>
      </div> <br> <br>
      </form>
    <?php endforeach; ?>
  </body>
</html>
