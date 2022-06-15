<?php

function multi()
{
    print "[0] : " . func_get_args()[0] . "<br>";
}

multi(2);
multi(5, 10);

/*
func_num_args(): 인자수 리턴 -- () 괄호 안 개수??
func_get_arg(): 인자값 가져올 때 사용 -- 0 부터 순서대로??
func_get_args(): 인자를 배열로 받음 -- 총 합 구할때?? ...$vals 같은건가??
*/

function print_sum()
{
    print "func_num_args() : " . func_num_args() . "<br>";
    print "func_get_arg(0) : " . func_get_arg(0) . "<br>";
    print "func_get_arg(1) : " . func_get_arg(1) . "<br>";
    print "-----<br>";
}

print_sum(10, 20);
print_sum(9, 11, 13);

function sum()
{

    print "count : " . count(func_get_args()) . "<br>";
    $sum = 0;
    foreach (func_get_args() as $val) {
        $sum += $val;
    }
    return $sum;
}

print "sum :" . sum(1, 2) . "<br>";
print "썸 :" . sum(1, 2, 10) . "<br>";
