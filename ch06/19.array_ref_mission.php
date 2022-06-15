<?php

function plus_array(&$arr, $val)
{
    foreach ($arr as $k => $v) {
        $arr[$k] = $v + $val;
    }
}


$arr = [10, 20, 30, 40, 50];

plus_array($arr, 5);

print_r($arr);
