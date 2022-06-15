<?php
/*

$scores = array(
    //국, 영, 수
    array(100, 100, 100),
    array(90, 80, 70),
    array(55, 65, 75),
    array(90, 88, 55),
);
$sub = array("국어", "영어", "수학");
$sub_sum = array(0, 0, 0, 0);

for ($i = 0; $i < count($scores); $i++) {
    for ($z = 0; $z < count($scores[$i]); $z++) {
        $sub_sum[$z] += $scores[$i][$z];
    }
}

for ($z = 0; $z < count($sub); $z++) {
    $sub_avg[$z] = $sub_sum[$z] / count($sub_sum);
    print "과목 : " . $sub[$z] . "<br>" . "합계 : " . $sub_sum[$z] . " / "
        . "평균 : " . $sub_avg[$z] . "<br>"
        . "-------------<br>";
}

*/

$scores = array(
    //국, 영, 수
    array(100, 100, 100),
    array(90, 80, 70),
    array(55, 65, 75),
    array(90, 88, 55),
);

$sub = array("국어", "영어", "수학");
$sub_sum = array();

for ($i = 0; $i < count($scores); $i++) {
    for ($z = 0; $z < count($scores[$i]); $z++) {
        $sub_sum[$z] += $scores[$i][$z];
    }
}

for ($i = 0; $i < count($sub); $i++) {
    $sub_avg = $sub_sum[$i] / count($scores);
    print $sub[$i] . "<br>";
    print "합계 : $sub_sum[$i], 평균 : $sub_avg <br>";
    print "<br>";
}

print_r($sub_sum);
