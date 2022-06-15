<?php

class Animal
{
    function crying()
    {
        print "동물이 운다. <br>";
    }
}

class Dog extends Animal
{
    function crying()
    {
        print "강아지가 멍멍. <br>";
    }
}

class Siba extends Dog
{
    function crying()
    {
        parent::crying();
        print "시바가 왕왕. <br>";
    }
}

class Cat extends Animal
{
    function crying()
    {
        print "고양이가 야옹. <br>";
    }
}

class Human
{
    function speak()
    {
        print "사람이 말하다.<br>";
    }
}

function doCry($ani)
{
    if (method_exists($ani, "crying")) {
        $ani->crying();
    } else {
        print "crying 메소드 없음!<br>";
    }
}

doCry(new Siba);
