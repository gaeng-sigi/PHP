<?php

$arr_age = array(
    "peter" => 35,
    "ben" => 37,
    "joe" => 43,
    "john" => 24
);

//값 정렬 (키 값 유지)
//asort(오름차순), arsort(내림차순)

arsort($arr_age);

print $arr_age;
