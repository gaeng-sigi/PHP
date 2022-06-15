<?php

    # 연도를 400으로 나누어지면 윤년이다.
    # 연도가 4로 나누어지고 100으로 나누어지지 않으면 윤년이다.

    $year = 1200;
    
    if($year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0))
    {
        print "$year <br>";
        print "윤년 O <br>";
    }
    else
    {
        print "$year <br>";
        print "윤년 X <br>";
    }

?>