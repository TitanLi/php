<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Document</title>
  </head>
  <body>
    <div>
      <?php echo $_POST['account']?>
      <?php echo $_POST['password']?>
    </div>
    <?php
      if ($_POST['account']==="apple" && $_POST['password']==="password"){
        echo "成功";
      }
    ?>
  </body>
</html>
