<?php

/*
    $star = rand(2, 10);
    print $star . "<br>";
    for($i=0; $i<$star; $i++)
    {
        for($z=0; $z<=$i; $z++)
        {
            print "★";
        }
        print "<br>";
    }

    print "<br>";

    */

$star = rand(3, 10);
print "$star : <br>";

$sum = "";
for ($y = 1; $y <= $star; $y++) {
    $sum = $sum . "★";
    print "$sum<br>";
}
