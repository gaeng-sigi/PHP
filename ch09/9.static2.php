<?php

class Computer
{
    public static $brand;
    public $price;

    // 객체마다 다른 값을 주고 싶으면 static을 주면 안된다.

    function myPrint()
    {
        print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 {$this->price}입니다.<br>"; // self는 class 명?(Computer)
    }

    static function myStaticPrint() // static은 파라미터 안에 있는것만 사용할때 사용.
    {
        print "컴퓨터 브랜드는 " . self::$brand . ", 가격은 입니다.<br>";
    }
}

Computer::$brand = "LG";

$c = new Computer;
$c->price = 10000;

$c2 = new Computer;
$c2->price = 20000;

$c->myPrint();
$c2->myPrint();

Computer::$brand = "Samsung";
$c->myPrint();
$c2->myPrint();
