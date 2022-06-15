<?php
function inc()
{
    static $i = 1; // 함수 호출 후에도 변수가 살아있다.
    print $i++ . "<br>";
}

$z = 100; // 전역 변수

/*
function inc2()
{
    global $z;
    print $z = "<br>"; // 지역 변수
    $z += 1;
}

inc2();
print $z . "<br>";
*/

for ($i = 0; $i < 10; $i++) {
    inc();
}
