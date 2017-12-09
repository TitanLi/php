<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <form action="./get.php" method="get" id="myForm">
      <span>姓名：</span><input type="text" name="name" />
      <span>電話：</span><input type="text" name="phone" />
      <button type="submit">送出</button>
    </form>
    <input type="submit" value="送出" onclick="document.getElementById('myForm').submit()"/>

    <form action="./post.php" method="post" id="myFotm">
      <span>姓名：</span><input type="text" name="account" />
      <span>電話：</span><input type="password" name="password" id="password"/>
      <button type="submit">送出</button>
    </form>
  </body>
  <script>
  </script>
</html>
