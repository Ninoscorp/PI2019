
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="test2.php" method="post">
      <input type="text" name="site" value="">
      <input type="submit" name="" value="posalji">
    </form>
  </body>
</html>
<?php
if(isset($_POST["site"])){$site = $_POST["site"];
if(preg_match("/http(s)?:\/\/www\.[a-z0-9]{1,9}\.[a-z]{2,3}$/",$site) && isset($site))echo "website: ".$site." je validno upisan";else{echo "nije";};
}
 ?>
