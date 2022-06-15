<?php

    $star = rand(2, 10);
    print $star . "<br>";
    for($i=0; $i<$star; $i++)
    {
        for($z=0; $z<$star; $z++)
        {
            print "★";
        }
        print "<br>";
    }
    
?>