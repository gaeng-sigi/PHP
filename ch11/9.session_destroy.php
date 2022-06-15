<?php

session_start();
session_destroy();
// session_unset();
// session_regenerate_id(true); 세션 id값을 변경한다.
echo $_SESSION['var1'], "<br>";
echo $_SESSION['var2'], "<br>";

?>

<a href="10.confirm.php">확인</a>