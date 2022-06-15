<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>과일 검색</title>
</head>
<body>
    <form name="fruit" method="post" action="./fruitdata.php">
        <!-- post 값이 주소창에 안나옴, get 값이 주소창에 나옴 -->
        원하는 가격을 입력하세요.<br>
        가격: <input type="text" name="low"><br>
        <input type="submit" value="찾기">
    </form>
</body>
</html>