<?php

include_once "db/db_board.php";

session_start();

$nm = "";
if (isset($_SESSION['login_user'])) {
    $login_user = $_SESSION['login_user'];
    $nm = $login_user['nm'];
}

$list = sel_board_list();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="common.css">
    <title>리스트</title>
</head>

<body>
    <div id="container">
        <header>
            <?= isset($_SESSION['login_user']) ? "<div>" . $nm . "님 환영합니다.</div>" : "" ?>
            <div>
                <?php if (isset($_SESSION['login_user'])) { ?>
                    <a href="write.php">글쓰기</a>
                    <a href="logout.php">로그아웃</a>
                <?php } else { ?>
                    <a href="login.php">로그인</a>
                <?php } ?>
            </div>
        </header>
        <main>
            <h1>리스트</h1>
            <table>
                <tr>
                    <td>글번호</td>
                    <td>제목</td>
                    <td>글쓴이</td>
                    <td>작성일자</td>
                </tr>
                <?php foreach ($list as $item) { ?>
                    <tr>
                        <td><?= $item['i_board'] ?></td>
                        <td><a href="detail.php?i_board=<?= $item['i_board'] ?>"><?= $item['title'] ?></a></td>
                        <td><?= $item['nm'] ?></td>
                        <td><?= $item['created_at'] ?></td>
                    </tr>
                <?php } ?>
            </table>
        </main>
    </div>
</body>

</html>