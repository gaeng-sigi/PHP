<?php
$freshman = array(
    "david" => "computer",
    "alice" => "math",
    "elsa" => "physics",
    "bob" => "music",
    "chris" => "electronics"
);

print_r($freshman);
print "<br>";
print $freshman["david"] . "<br>";
print $freshman["alice"] . "<br>";
print $freshman["elsa"] . "<br>";
print $freshman["bob"] . "<br>";
print $freshman["chris"] . "<br>";

$freshman["bob"] = "dance";
print "<br><br>";
print $freshman["bob"] . "<br>";

$freshman["frank"] = "history";
print $freshman["frank"] . "<br>";

$freshman[0] = "안녕";
print "<br><br>";
print_r($freshman);
