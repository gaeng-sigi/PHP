<?php

// 대문자로 기록할 것

define("NAME", "홍길동");
define("NAME2", "장보고");
define("STAND_AGE", 25);

// 상수 const vs 리터럴 literal

print NAME;
print NAME2;
print STAND_AGE;
print "--------<br>";

function fn1()
{
    print "fn : " . NAME . "<br>";
}

function fn2()
{
    define("TEST", "테스트");
}

fn1();
fn2();
print TEST . "<br>";
