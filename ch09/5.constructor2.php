<?php

/*
    용어 정리
- 멤버필드 : 멤버상수 + 멤버변수
- 멤버메소드 : 클래스안의 함수
- 클래스 : 설계도 개념 -> 멤버필드와 멤버메소드로 구성
- 객체, 인스턴스 : 같은 개념이라고 생각해도 무관
- 프로퍼티 : 속성(=멤버필드)
*/

class Fruit
{

    function __construct()
    {
        return $this;
    }

    // 멤버 field
    private $name;
    private $color;
    private $price;


    // 멤버 method
    public function print_fruit()
    {
        print "Name : {$this->name}<br>";
        print "Color : {$this->color}<br>";
        print "Price : {$this->price}<br>";
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }
}

$apple1 = (new Fruit)->setName("사과");
$apple1->print_fruit();

$apple2 = (new Fruit)
    ->setColor("파란")
    ->setPrice(1000);
$apple2->print_fruit();
