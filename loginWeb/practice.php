<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    # Example 1
        寫一支code, 印出結果是 1+2+3+4+5 ... +10 = 55

<?php
    $n = 10;
    $sum = 0;

    for ($i = 1 ; $i <= $n ; $i++) {
        $sum = $sum + $i;
        if ($i < 10) {
            echo $i."+";
        } else {
            echo $i."=".$sum;
        }
    }
    
    
?>

    # Example 2
    實作一支程式產生長度10的費氏數列(Fibonacci)
    Result:
    0, 1, 1, 2, 3, 5, 8, 13, 21, 34

<?php
        function fib($n)
        {
            if ($n == 0) {
                return 0;
            }
            if ($n == 1) {
                return 1;
            }
            return fib($n-1) + fib($n-2); // 只有return，沒有echo
        }
        
        for ($i = 0; $i <= 10; $i++) {
            echo fib($i).' '; // 實際上輸出數列
        }
            //兩種解法
            $arr[0] = 0;
            $arr[1] = 1;

            for ($i = 2; $i <= 10; $i++) {
                $arr[$i] = $arr[$i-2] + $arr[$i-1];
            }

            foreach ($arr as $n) {
                echo $n." ";
            }

?>

    # Example 3
    給一個固定的數列...
    10, 50, 232, 34, 12, 26, 63, 100

    設計一支程式判斷規則 :
    x >= 100 : x = x * 10
    x < 50 : x  = x / 10

<?php
    $num = array(10, 50, 232, 34, 12, 26, 63, 100);
    $result = execute($num);
    //print_r($result);
    echo implode(",", $result) . "\n\n";
    //print_r(implode(",",$result));
    function execute($num)
    {
        $result = array();
        for ($i = 0; $i < count($num); $i++) {
            if ($num[$i] >= 100) {
                $result[] = $num[$i] * 10;
            } elseif ($num[$i] < 50) {
                $result[] = $num[$i] / 10;
            } else {
                $result[] = $num[$i];
            }
        }
        return $result;
    }
?>
</body>
</html>