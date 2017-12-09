<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
  </head>
  <body>
    <div>for test</div>
    <!-- php印出東西 -->
    <div><?php echo "php no.1";?></div>
    <!-- 變數宣告 -->
    <div><?php $var="我是變數";?></div>

    <div><?php echo "<button>我是按鈕</button>";?></div>
    <?php
      $arr=[0,1,2];
      // die(); //中斷php
    ?>
    <div><?php echo $arr[2];?></div>
    "''"
    <?php
      $user = [
        'name' => 'apple',
        'age' => '100'
      ];
    ?>
    <span>
      <?php echo '你的名字：'.$user['name']?>
    </span>
    <br />
    <?php var_dump($user)//印出元素?>
    <?php
      if ($user['age']>=65) {
        echo '你好';
      }
      if (false) {

      } elseif ($user['age']>=65) {
        echo '100';
      }
    ?>
    <div>
      <?php
        foreach ($user as $key => $value) {
          echo $key.'=>'.$value.',';
        }
        foreach ($user as $value) {
          echo '不用用到key'.$value.',';
        }
      ?>
    </div>
  </body>
</html>
