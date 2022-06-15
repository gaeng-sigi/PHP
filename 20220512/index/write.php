<?php
    // include_once "index.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="css1.css">
</head>
<body>
    <?php include('index.php') ?>
    <main>
        <div>
            <img onclick="browseStepFile(1)" src="https://recipe1.ezmember.co.kr/img/pic_none2.gif" width="160" height="160" style="cursor:pointer">
        </div>
        <div>
            <form action="write_proc">
                <label for="title">레시피 제목</label>
                <input type="text" name="title" id="title">
            </form>
        </div>
    </main>
</body>
</html>