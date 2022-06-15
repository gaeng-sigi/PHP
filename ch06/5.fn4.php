<?php

$dan = rand(2, 9);

//print_gugudan($dan);
print_gugudan_from_to(2, 6);

function print_gugudan_from_to($sdan, $edan)
{
    for ($dan = $sdan; $dan <= $edan; $dan++) {
        print_gugudan($dan);
        print "<br>";
    }
}

function print_gugudan($dan)

{
    for ($i = 1; $i < 10; $i++) {
        print "$dan x $i = " . ($dan * $i) . "<br>";
    }
}
