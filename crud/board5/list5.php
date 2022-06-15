<?php

include_once "db5.php";

$conn = get_conn();
$sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";

$result = mysqli_query($conn, $sql);
mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>

<body>
    <h1>리스트</h1>
    <a href="write5.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <td>번호</td>
            <td>제목</td>
            <td>작성일시</td>
        </tr>

        <?php

        while ($row = mysqli_fetch_assoc($result)) {
            $i_board = $row['i_board'];
            $title = $row['title'];
            $create_at = $row['create_at'];

            print "<tr>";
            print "<td>$i_board</td>";
            print "<td><a href='detail5.php?i_board=$i_board'>$title</a></td>";
            print "<td>$create_at</td>";
            print "</tr>";
        }

        ?>
    </table>
</body>

</html>