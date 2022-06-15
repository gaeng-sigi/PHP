<?php

include_once "db/db_board.php";

session_start();

$login_user = $_SESSION['login_user'];
$i_user = $login_user['i_user'];

$i_board = $_GET['i_board'];

$param = [
    "i_user" => $i_user,
    "i_board" => $i_board
];

$result = del_board($param);
if ($result) {
    header("location: list.php");
}
