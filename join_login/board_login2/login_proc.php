<?php

include_once "db/db_user.php";

session_start();

$uid = $_POST['uid'];
$upw = $_POST['upw'];

print "uid : $uid <br>";
print "upw : $upw <br>";

$param = [
    "uid" => $uid
];

$result = sel_user($param);
if (empty($result)) {
    die("해당하는 아이디가 없습니다");
}

print "i_user : " . $result['i_user'] . "<br>";
print "pw : " . $result['upw'] . "<br>";

if ($upw === $result['upw']) {
    $_SESSION['login_user'] = $result;
    header("location: list.php");
} else {
    header("location: login.php");
}
