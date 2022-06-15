<?php
$numbers = array(10, 20, 5 => 30, 40); // 5번째 칸에 30이 들어가고 6번째 칸에 40이 들어간다. 2,3,4번째 칸이 없음.

print_r($numbers);
print "<br>";
print "count : " . count($numbers);

for ($i = 0; $i < count($numbers); $i++) {
    print $numbers[$i] . "<br>";
}
print "-- 끝 --";
