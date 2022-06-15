<?php

class Fruit
{
    private $name;
    private $color;
    private $price;

    function __construct($name = null, $color = null, $price = null)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
    }

    public function print_fruit()
    {
        print "Name : {$this->name}<br>";
        print "Color : {$this->color}<br>";
        print "Price : {$this->price}<br>";
    }
}

$apple = new Fruit();
$banana = new Fruit("바나나", "노랑", 500);

$apple->print_fruit();
$banana->print_fruit();

// private 멤버필드에 값 넣을 수 있는 2가지 방법 -> 1.setter method 2.생성자 함수
// private 멤버필드에 값 뺄 수 있는 1가지 방법 -> 1.getter method