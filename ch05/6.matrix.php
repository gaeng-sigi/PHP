<?php
$matrix = array(
    array(1, 2, 3),
    array(4, 5, 6, 10),
    array(7, 8, 9, 11, 12),
);

print_r($matrix);
print "<br><br>";

print $matrix[1][1] . "<br>";

$child1 = $matrix[1];

print $child1[1] . "<br>";

print "matrix count : " . count($matrix) . "<br>";
print "matrix[0] count : " . count($matrix[0]) . "<br>";
print "matrix[1] count : " . count($matrix[1]) . "<br>";
print "matrix[2] count : " . count($matrix[2]) . "<br>";
