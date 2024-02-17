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

echo '<hr>';

$DB = mysqli_connect('localhost', 'root', '', 'universityapp_db');
$result = $DB->query("SELECT *, DATE(dateTime) AS `day` FROM sales ORDER BY dateTime ASC");

$currentDate = '';
$sum = 0;

$daily = 0;
for ($i = 0; $i < $result->num_rows; $i++) {
    $row = $result->fetch_assoc();
    echo $i.' '.$row['dateTime'].' = '.$row['price'].'<br>';

    if ($currentDate != $row['day']) {
        echo '<b>Daily Sales: '. $daily .'</b><br>';
        $currentDate = $row['day'];
        $daily = 0;
    }
    
    if ($currentDate == $row['day']) {
        $daily += $row['price'];
    }
    
    
    $sum += $row['price'];
}
echo '<b>Total Sales: '.$sum.'</b>';