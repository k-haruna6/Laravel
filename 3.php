<?php
//引数に数値を指定して実行すると数値を2倍にして返す関数の作成
function sum($number) {
    $result = 0;
    
$result = $number *2;
    return $result;
}

// 関数を実行
echo sum(50);

echo "\n";

//$aと$bを仮引数に持ち$aと$bを足した結果を返す関数の作成
function add($a, $b){
    $result = 0;
    
    $result = $a + $b;
    return $result;
}
//関数を実行
echo add(150,10);

echo "\n";



