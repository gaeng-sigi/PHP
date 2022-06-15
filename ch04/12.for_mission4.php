<?php

    print "[";
    for($i=1; $i<8; $i++)
    {
        print $i;
        if($i<7)
        {
            print ",";
        }
    }
    print "]<br>";

    $end_val = 7;
    print "[";
    for($i=1; $i<=$end_val; $i++)
    {
        if($i > 1) {print ",";}
        print $i;

        # print $i;
        # if($i < $end_val) { print ",";}
    }
    print "]";
?>