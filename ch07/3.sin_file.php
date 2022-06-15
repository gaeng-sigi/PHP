<?php

print __file__ . "<br>";
print __line__ . "<br>";
print __line__ . "<br>";
print "php version : " . PHP_VERSION . "<br>";
print "os : " . PHP_OS . "<br>";

print "--글로벌 상수 -- <br>";
foreach ($globals as $key => $var) {
    print $key . " : " . $var . "<br>";
}
