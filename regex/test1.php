
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="test1.php" method="post">
      <input type="text" name="mail" value="">
      <input type="submit" name="" value="posalji">
    </form>
  </body>
</html>
<?php
$mail = "";
if(isset($_POST["mail"]))$mail = $_POST["mail"];
if(preg_match("/(\w){1,5}[0-9]{1,5}@yahoo.com/",$mail))echo "email: ".$mail." je validno upisan";else{echo "nije";};

 ?>
