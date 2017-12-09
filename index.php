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

    <!-- 也可將元件印出 -->
    <div><?php echo "<button>我是按鈕</button>";?></div>

    <!-- 陣列宣告 -->
    <?php
      $arr=[0,1,2];
      // die(); //中斷php
    ?>

    <!-- 印出陣列元素 -->
    <div><?php echo $arr[2];?></div>

    <!-- Object keys & value 宣告 -->
    <?php
      $user = [
        'name' => 'apple',
        'age' => '100'
      ];
    ?>

    <!-- . => 可用來串接字串 -->
    <span>
      <?php echo '你的名字：'.$user['name']?>
    </span>
    <br />

    <!-- var_dump印出元素 -->
    <?php var_dump($user)?>

    <!-- 判斷式寫法 -->
    <?php
      if ($user['age']>=65) {
        echo '你好';
      }
      if (false) {

      } elseif ($user['age']>=65) {
        echo '100';
      }
    ?>

    <!-- foreach用法 -->
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
