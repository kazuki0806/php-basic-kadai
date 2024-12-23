<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
       function sort_2way(array $array, bool $order): array {
        
        if ($order) {
            sort($array); 
        } else {
            rsort($array); 
        }
        return $array;
        }
    
        
        $nums = [15, 4, 18, 23, 10];
        
        
        echo "昇順にソートします。<br>";
        $ascending = sort_2way($nums, true); 
        foreach ($ascending as $num) {
            echo $num . "<br>";
        }
        
       
        echo "降順にソートします。<br>";
        $descending = sort_2way($nums, false); 
        foreach ($descending as $num) {
            echo $num . "<br>";
        }

        ?>

        
    </p>
</body>

</html>
