<?php

setcookie("country", "Korea");
if (isset($_COOKIE['country'])) {
    echo "country : ", $_COOKIE['country'], "<br>";
}

?>

<a href="12.cookie2.php">Next page</a>