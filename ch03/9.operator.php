<?php

    # 10은(는) 짝수입니다.

    $num = 11;

    if($num % 2 === 0)
    {
        print "${num}는(은) 짝수입니다";
    }
    else
    {
        print "${num}는(은) 홀수입니다<br>";
    }

    print "-----------<br>";

    $num2 = 13;
    $odd_even = '홀';

    if($num2 % 2 === 0)
    {
        $odd_even = '짝';
    }

    print "${num2}는(은) ${odd_even}수입니다.";


?>