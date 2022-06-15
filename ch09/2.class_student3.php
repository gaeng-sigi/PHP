<?php

class Student2 // private 는 class 안에서만 가능. 외부 불가능. 상수만 public 가능. 
{
    private $studentId;
    private $studentName;

    public function printStudent($id, $name)
    {
        print "ID : ${id}<br>";
        print "Name : ${name}<br>";
    }
}

$obj = new Student2; // new 옆에 클래스명. obj에 담아서
$obj->studentId = 111;
$obj->printStudent(12122, "홍길동");
