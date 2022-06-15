<?php

$arr = array(); // 이 배열에 최대로 넣을 수 있는 값을 5개까지

for ($i = 0; $i < 5; $i++) {
    $val = rand(1, 8);

    $is_duplication = 0;
    // 0: 중복 X, 1: 중복 O -- is_duplication(php) 또는 isDuplication(js)

    for ($z = 0; $z < count($arr); $z++) {
        if ($arr[$z] === $val) {
            $is_duplication = 1;
            break;
        }
    }
    if ($is_duplication === 1) {
        $i--;
    } else {
        array_push($arr, $val);
    }
}

print_r($arr);

/* goto는 위험하다.

for ($i = 0; $i < 5;) {
    $val = rand(1, 8);

    for ($z = 0; $z < count($arr); $z++) {
        if ($arr[$z] === $val) {
            $i--;
            goto first_for;
        }
    }
    array_push($arr, $val);

    first_for:
    $i++;
}

print_r($arr);

*/