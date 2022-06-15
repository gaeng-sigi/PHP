<?php
function make_ten()
{
    global $i;
    $i = $i + 10;
    /*
    $i = $i + 10; // 지역변수
    */
}
$i = 5;
make_ten();
print "i : $i <br>";
