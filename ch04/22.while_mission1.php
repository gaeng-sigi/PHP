<?php
/*
        1부터 val 변수에 있는 숫자를 모두 더해주세요.
        그리고 결과값을 출력해 주세요.
        while문으로 해결.
    */

$val = rand(50, 100);
print "val : $val <br>";

$sum = 0;
$i = 0;

while ($i <= $val) {
    $sum += $i;
    $i++;
    # $sum += $i++;
}
print "sum : $sum <br>";



/*
for ($i = 1; $i <= 100; $i++) {
    $result += $i;
}
print $result;

*/