<?php

/*
    single line comment
    multi line comment
*/

    $age = 21; // '=' 대입연산자 -> 오른쪽 내용을 왼쪽 내용에 복사.
    print "<div>" . $age . "</div>";

    $name;
    print "<div>" . $name . "</div>";

    $name = "홍길동";
    print "<div>" . $name . "</div>";

    $name = "장보고";
    print "<div>" . $name . "</div>";

    $name = 10;
    print "<div>" . $name . "</div>";

    // 변수명 네이밍 규칙
    /*
    1. 대소문자, 숫자, 특수기호 _(언더바)로 이루어져야 함.
    2. 숫자가 맨 앞에 오면 X. 맨 앞만 아니면 된다.
    3. 문자 사이에 빈칸 X. 빈칸 대신 _(언더바) 사용하면 된다.
    */

    $a1b = 123;
    print $a1b;

    $_123 = "ㅎㅎㅎㅎ";
    print $_123;

?>