<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>
<body>
    <h1>Arrays</h1>

    <?php
    $grade1 = 50;
    $grade2 = 60;
    $grade3 = 70;
    $grade4 = 80;
    $grade5 = 90;

    $sum = $grade1 + $grade2 + $grade3 + $grade4 + $grade5;
    $average = $sum / 5;

    echo 'Sum is <b>'.$sum.'</b><br>';
    echo "Average is <b>" . $average . '</b>';

    echo '<hr>';

    //          0   1   2   3   4   5   6   7   8 (n- 1)
    $grades = [50, 60, 70, 80, 90, 85, 75, 65, 55];
    echo "Number of grades: " . count($grades) ."<br>";

    $sum = 0;
    for ($i = 0; $i < count($grades); $i++) {
        // $sum += $grades[$i];
        $sum = $sum + $grades[$i];
    }
    /*
    i       count($grades)      sum         $grades[$i]     sum
    0       9                   0           50               50
    1       9                   50          60              110
    2       9                   110         70              180
    3       9                   180         80              260
    4       9                   260         90              350
    5       9                   350         85              435
    6       9                   435         75              510
    7       9                   510         65              575
    8       9                   575         55              630
    9       9                   
    */


    echo 'Sum is <b>'.$sum.'</b><br>';
    echo "Average is <b>" . $sum / count($grades) . '</b>';
    ?>

    <hr>

    <h2>Associative Array</h2>

    <?php
    // $student = ["Last Name", "First Name", "Middle Name", 'Male'];
    // $student[0].', '.$student[1].' '.$student[2]; // Full Name

    $student = [
        'last'  => "Last Name",
        'first' => "First Name",
        'mid'   => "Middle Name",        
        'gen'   => 'Male'
    ];
    // $student['last'].', '.$student['first'].' '.$student['mid']; // Full Name


    $student2 = [
        'first' => "Two",
        'mid'   => "Any",
        'last'  => "Student",
        'gen'   => 'Female'
    ];

    // echo $student[0].", ".$student[1]." ".$student[2].'<br>';
    echo $student['last'].", ".$student['first']." ".$student['mid'].' ('.$student['gen'].')<br>';
    echo $student2['last'].", ".$student2['first']." ".$student2['mid'].' ('.$student2['gen'].')<br>';

    ?>

    <hr>


    <?php
    // MULTI-DIMENSIONAL ARRAY
    $students = [
        [                                           // 0
            'first' => "First Name",
            'mid'   => "Middle Name",
            'last'  => "Last Name",
            'gen'   => 'Male'
        ],
        [                                           // 1
            'first' => "Two",
            'mid'   => "Any",
            'last'  => "Student",
            'gen'   => 'Female'
        ],
        [                                           // 2
            'last'  => "Student",
            'first' => "Thirdy",
            'mid'   => "3",            
            'gen'   => 'Male'
        ],
        [                                          // 3
            'last'  => "Student",
            'first' => "Forty",
            'mid'   => "3",            
            'gen'   => 'Female'
        ]      
    ];
    // $students[0] = ['first' => "First Name", 'mid' => "Middle Name", 'last' => "Last Name", 'gen' => 'Male'   ]
    // $students[1] = ['first' => "Two",        'mid' => "Any",         'last' => "Student",   'gen' => 'Female' ] 
    
    // echo "students = ";
    // print_r($students);

    echo '<hr>';

    for ($i = 0; $i < count($students); $i++) {
        echo $i.'. ';
        // print_r($students[$i]);
        // echo $students[$i]['first'].'<br>';
        
        // $oneStudent = $students[$i];
        // echo $oneStudent['last'].', '.$oneStudent['first'];

        echo $students[$i]['last'].', '.$students[$i]['first'];
        echo '<br>';
    }


    // Array of associate arrays
    $products = [
        [ 'id' => 'A',   'name' => 'Product A' ],
        [ 'id' => 'B',   'name' => 'Product B' ],
        [ 'id' => 'C',   'name' => 'Product C' ],
        [ 'id' => 'D',   'name' => 'Product D' ],
        [ 'id' => 'E',   'name' => 'Product E' ]
    ];
    // Display $products as an HTML table
    /*
    ------------------------
    |    ID   |  NAME       |
    -------------------------
    |    A    |  Product A  |
    -------------------------
    |    B    |  Product B  |
    -------------------------
    |    C    |  Product C  |
    -------------------------
    |    D    |  Product D  |
    -------------------------
    |    E    |  Product E  |
    -------------------------
    */
    ?>
    <table border="1" cellspacing="0" cellpadding="10" width="100%".>
        <tr>
            <td width="33">#</td>
            <td width="100">ID</td>
            <td>NAME</td>
        </tr>

        <?php /*
        <tr>
            <td><?= $products[0]['id'] ?></td>
            <td><?= $products[0]['name'] ?></td>
        </tr>
        <tr>
            <td><?= $products[1]['id'] ?></td>
            <td><?= $products[1]['name'] ?></td>
        </tr>
        <tr>
            <td><?= $products[2]['id'] ?></td>
            <td><?= $products[2]['name'] ?></td>
        </tr>
        <tr>
            <td><?= $products[3]['id'] ?></td>
            <td><?= $products[3]['name'] ?></td>
        </tr>
        <tr>
            <td><?= $products[4]['id'] ?></td>
            <td><?= $products[4]['name'] ?></td>
        </tr>
        */ ?>

        <?php
        for ($i = 0; $i < count($products); $i++) {
            ?>
            <tr>
                <td><?= $i+1 ?></td>
                <td><?= $products[$i]['id'] ?></td>
                <td><?= $products[$i]['name'] ?></td>
            </tr>
            <?php
        }

        ?>

        <tr>
            <td colspan="2">Using ForEach</td>
        </tr>

        <?php
        // Array as Item
        $i = 0;
        foreach ($products as $p) {
            ?>
            <tr>
                <td><?= ++$i ?></td>
                <td><?= $p['id'] ?></td>
                <td><?= $p['name'] ?></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <footer>
        END
    </footer>
</body>
</html>