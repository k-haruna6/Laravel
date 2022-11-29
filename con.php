<?php
/**$arrという配列の仮引数を持ち
数値が入った配列array(1,3,5,7,9)を渡すと
その要素をすべてかけた結果を返す関数の作成*/
function  iu($arr) {
    $result = 0;
    for ($i = 0; $i < count($arr); $i++){
        if($i == 0){
            $result += $arr[$i];
        }else{
            $result *= $arr[$i];
        }    
    }
    return $result;
}

function product($arr){
    $result = $arr[0];
    for ($i = 1; $i < count($arr); $i++) {
        $result *= $arr[$i];
    }
    return $result;
} 
echo product(array(1,3,5,7,9,));




function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number < $a){
        $max_number = $a;    
     }
 }
 
 return $max_number;
}
 echo max_array(array(6,2,3,10,5));
 