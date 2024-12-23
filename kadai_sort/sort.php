<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
       
       
       function sort_2way(array $array, bool $order): void {
          
           if ($order) {
               sort($array); 
               echo "昇順にソートします。<br>";
           } else {
               rsort($array); // 降順ソート
               echo "降順にソートします。<br>";
           }
           
          
           foreach ($array as $num) {
               echo $num . "<br>"; 
           }
       }
       

       $nums = [15, 4, 18, 23, 10];
       
       
       sort_2way($nums, true);
       
       
       sort_2way($nums, false);
       
       

        ?>

        
    </p>
</body>

</html>
