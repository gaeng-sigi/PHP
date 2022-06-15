<?php

class Student3
{
    private $studentId;
    private $studentName;

    //getters
    public function getStudentId() // getters 파라미터 받지 않는다. 무조건!
    {
        return $this->studentId; // return 있다.
    }

    public function getStudentName()
    {
        return $this->studentName;
    }

    //setters
    public function setStudentId($studentId) // setters 파라미터 받는다.
    {
        $this->studentId = $studentId; // 그대로 저장. return 없다.
        return $this;
    }

    public function setStudentName($studentName)
    {
        $this->studentName = $studentName;
        return $this;
    }



    public function printStudent()
    {
        print "ID : {$this->studentId}<br>";
        print "Name : {$this->studentName}<br>";
    }
}

$obj = new Student3;
// print $obj->setStudentId(1122)->getStudentId() . "<br>";
$obj->setStudentId(1122);
print "1번째 : " . $obj->getStudentId() . "<br>";

$obj2 = new Student3;
print $obj2->setStudentId(8888)->getStudentId() . "<br>";
print "2번째 : " . $obj->getStudentId() . "<br>";
