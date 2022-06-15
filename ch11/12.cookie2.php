<?php

setcookie("country", "한국");
echo "country : ", $_COOKIE['country'], "<br>";

$_COOKIE['country'] = "UK";
echo "country : ", $_COOKIE['country'], "<br>";

/*
unset($_COOKIE['country']);
setcookie("country");
*/

echo "country : ", $_COOKIE['country'], "<br>";
