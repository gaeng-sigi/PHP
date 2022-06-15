<?php

$snum = 1;
$enum = 9;
print_num_from_to($snum, $enum);

function print_num_from_to($snum, $enum)
{
    print "[";
    if ($snum > $enum)
        for ($i = $snum; $i >= $enum; $i--) {
            if ($i < $snum) {
                print ",";
            }
            print $i;
        }
    else {
        for ($i = $snum; $i <= $enum; $i++) {
            if ($i > $snum) {
                print ",";
            }
            print $i;
        }
    }
    print "]";
}

//[4,5,6,7,8,9,10] 이렇게 출력하게 해주세요.
//만약 enum값이 더 작으면 [5,4,3,2,1] 이렇게 출력되게 해주세요.