<?php

include_once "db.php";

function ins_board(&$param)
{
    $i_user = $param['i_user'];

    $title = $param['title'];
    $ctnt = $param['ctnt'];

    $conn = get_conn();
    $sql = "INSERT INTO t_board(i_user, title, ctnt)
            VALUES('$i_user', '$title', $ctnt)";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function sel_board_list()
{
    $conn = get_conn();
    $sql = "SELECT A.i_board, A.title, B.nm, A.created_at
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user
            ORDER BY A.i_board DESC";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}

function sel_board(&$param)
{
    $i_board = $param['i_board'];

    $conn = get_conn();
    $sql = "SELECT A.title, A.ctnt, B.nm, A.created_at, B.i_user
            FROM t_board A
            INNER JOIN t_user B
            ON A.i_user = B.i_user
            WHERE A.i_board = $i_board";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return mysqli_fetch_assoc($result);
}

function upd_board(&$param)
{
    $i_board = $param['i_board'];
    $i_user = $param['i_user'];

    $title = $param['title'];
    $ctnt = $param['ctnt'];

    $conn = get_conn();
    $sql = "UPDATE t_board
            SET title = '$title', ctnt = '$ctnt', updated_at = now()
            WHERE i_board = $i_board
            AND i_user = $i_user";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}


function del_board(&$param)
{
    $i_board = $param['i_board'];
    $i_user = $param['i_user'];

    $conn = get_conn();
    $sql = "DELETE FROM t_board
            WHERE i_board = $i_board
            AND i_user = $i_user";

    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
    return $result;
}
