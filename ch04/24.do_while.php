<?php

print "-- 시작 --<br>";
do {
    print "r_val : $r_val <br>";
    $r_val = rand(1, 10);
} while ($r_val !== 10);
print "-- 끝 --";
