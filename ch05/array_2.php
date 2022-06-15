<?php

$arr = array(); // array() = [] 같다. 표현이 다를뿐 같다.

/*
$arr[0] = 10;
$arr[1] = 20;
$arr[2] = 30;
$arr[3] = 40;
$arr[4] = 50;
*/

$val = 10;
for ($i = 0; $i < 5; $i++) {
    $arr[$i] = $val;
    $val += 10;
}

/*
print "arr[0]:" . $arr[0] . "<br>";
print "arr[1]:" . $arr[1] . "<br>";
print "arr[2]:" . $arr[2] . "<br>";
print "arr[3]:" . $arr[3] . "<br>";
print "arr[4]:" . $arr[4] . "<br>";
*/

for ($i = 0; $i < count($arr); $i++) {
    print "arr[$i]: $arr[$i]<br>";
}

// 위에서 $i < 5 로 했기 때문에 '$i < count($arr)' 로 해주면 좋다.(유연한 소스)