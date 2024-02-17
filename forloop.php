<?php

$students = [
    12,          // $students[0]
    22,          // $students[1]
    323,         // $students[2]
    43           // $students[3]
];

// $i = 4
// count($students) = 4
for ($i = 0; $i < count($students); $i++) {
    //   0    =   12
    //   1    =   22
    //   2    =   323
    //   3    =   43
    echo $i.' = '.$students[$i].'<br>';
}
