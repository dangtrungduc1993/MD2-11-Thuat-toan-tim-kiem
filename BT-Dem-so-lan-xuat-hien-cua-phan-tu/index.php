<?php
function countNumber($arr,$num){
    $count = 0;
    for ($i = 0; $i < count($arr) ; $i++){
        if ($arr[$i] == $num){
            $count++;
        }
    }
    return $count;
}
$arr = [1,3,5,7,9];
$number = 5;
echo countNumber($arr,$number);
