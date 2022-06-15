<?php
// exam6.txt 파일 읽어서 전부 대문자로 변경한 후
// exam6_capital.txt 에 저장해 주세요.

// $filep = fopen("./exam6.txt", "r");

// while ($line = fgets($filep)) {
//     $filep1 = fopen("./exam6_capital.txt", "a+");
//     $filep2 = strtoupper($line);
//     fputs($filep1, "$filep2");
//     fclose($filep1);
// }

// fclose($filep);

$origin = file("./exam6.txt");
$target = fopen("./exam6_capital.txt", "a");

foreach ($origin as $line) {
    $capital = strtoupper($line);
    fputs($target, $capital);
}
fclose($target);
