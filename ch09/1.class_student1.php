<?php
// Access Modifier
// 접근제어 지시자
// 접근지시어
// 접근제어자

// java : private default protected public

class Student1 // 클래스명 첫글자 항상 대문자...
{
    public $studentId;
    public $studentName;

    public function printStudent($id, $name)
    {
        print "ID : ${id}<br>";
        print "Name : ${name}<br>";
    }
}

$obj = new Student1; // new 옆에 클래스명. obj에 담아서 
$obj->studentId = 20171234;
$obj->studentName = "Alice";

$obj->printStudent($obj->studentId, $obj->studentName);
