<?php

$GLOBALS["foo"] = 10;

foreach ($GLOBALS as $key => $var) {
    print $key . " : ";
    print_r($var);
    print "<br>";
}

$arr = [];
print_r($arr);
