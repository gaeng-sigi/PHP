<?php

$arr = [4, 9, 10, 22, 100, 45, 99];


// 95 45 100 22 10 9 4 역순으로 출력하기 //



krsort($arr);

foreach ($arr as $s) {
    print $s . "<br>";
}

print "------------<br>";

for ($i = count($arr) - 1; $i >= 0; $i--) {
    print $arr[$i] . "<br>";
}

print "------------<br>";

$len = count($arr);

for ($i = 1; $i <= $len; $i++) {

    print $arr[$len - $i] . "<br>";
}

print "------------<br>";

$len = count($arr);

for ($i = 1; $i <= $len; $i++) {
    $z = $len - $i;
    print $arr[$z] . "<br>";
}
