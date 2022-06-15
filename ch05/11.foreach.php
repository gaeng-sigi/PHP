<?php
$array = array(100, 200, 300, 400, 500);

foreach ($array as $val) {
    print $val . "<br>";
}
print "---------<br>";

foreach ($array as $key => $val) {
    print $key . " : " . $val . "<br>";
}
print "---------<br>";
