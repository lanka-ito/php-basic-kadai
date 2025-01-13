<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP基礎編 課題ソート</title>
</head>
<body>
  <p>
    <?php
    

    function sort_2way($array, $order) {
    
      
     if ($order === true) {
      echo '昇順にソートします。<br>';
      sort($array); 
     } elseif($order === false) {
      echo '降順にソートします。<br>';
      rsort($array);
     }

     // ソートされた配列を表示
     foreach ($array as $value) {
      echo "{$value}<br>";
     }
     }
     
    // ソートする配列を宣言
    $nums = [15, 4, 18, 23, 10 ];

    sort_2way($nums, true);
    sort_2way($nums, false);

    ?>
  </p>
  
</body>
</html>