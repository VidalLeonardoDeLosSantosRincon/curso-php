<?php 
    $num = 0;
    $num2 = $value + 1;
    $num3;
    $num4;
    $fibo = [$num,$num2];
    $limit = $num + 10;

    for($i=$num; $i<=$limit; $i++){
        $num3 = $num1 + $num2;
        $num4 = $num3;
        array_push($fibo,$num3,$num4);
    }

    var_dump($fibo);

?>