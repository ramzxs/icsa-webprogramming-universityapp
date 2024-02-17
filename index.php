<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>University App</title>

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
        }
        header {
            font-size: x-large;
            font-weight: bold;
            color: white;
            background-color: darkgreen;
            padding: 20px;
        }

        header span {
            border-radius: 32px;
            height: 32px;
            width: 32px;
            color: darkgreen;
            background-color: white;
            display: inline-block;
        }

        main {
            padding: 20px; /* top right bottom left */
            padding: 20px 100px; /* top&bottom left&right */
        }

        table, td {
            border: 1px solid gray;
        }
        .table-header {
            font-weight: bold;
            color: lightgray;
            background-color: #333333;
        }

        .student-id {
            text-align: center;
            font-weight: bold;
            text-decoration: none;
            padding: 5px;
            color: white;
            background-color: blueviolet;
            border: 1px solid gray;
            border-radius: 8px;
            display: block;
        }
        .student-id:hover {
            color: yellow;
            background-color: darkviolet;
        }

        .info {
            color: darkviolet;
            font-weight: bold;
        }

        footer {
            margin-top: 20px;
            text-align: center;
            padding: 20px;
            font-size: x-small;
            background-color: lightgray;
        }

        .note {
            font-size: small;
            color: lightgray;
        }
    </style>
</head>
<body>
    <header>
        <span>Q8</span>
        Universite App <?= date('H:i:s') ?>
    </header>

    <main>
        <h1>STUDENTS LIST</h1>

        <table cellspacing="0" cellpadding="10" width="100%">
            <thead>
                <tr class="table-header">
                    <td width="170">STUDENT ID NUMBER</td>
                    <td>STUDENT INFO</td>
                </tr>
            </thead>
            <tbody>
                <?php
                // $i = 0;
                // $c = 'c';
                // $str = "String";
                // OBJECTS ->

                // DATABASE CONNECTION
                $DB = mysqli_connect('127.0.0.1', 'root', '', 'universityapp_db') or die("Database Connection Error");

                // SQL COMMAND EXECUTION
                $result = $DB->query("SELECT * FROM view_student");
                // $result = $DB->query("SELECT * FROM student");

                // LISTING OF ROWS
                for ($i = 0; $i < $result->num_rows; $i++) {
                    $row = $result->fetch_assoc();
                    $ALLSTUDENTS[] = $row;
                    ?>
                    <tr>
                        <td>
                            <a href="#" onclick="showInfo(<?= $i ?>, <?= $row['id'] ?>)" class="student-id">
                                <?= $row['longIDNumber'] ?>
                                <?php /* $row['id'] */ ?>
                            </a>
                        </td>
                        <td class="info" id="info<?= $i ?>">
                            <!-- innerHTML -->
                        </td>
                        <?php // $row['nameLast'].', '.$row['nameFirst'].' '.$row['nameMiddle'] ?>
                    </tr>
                    <?php
                    // $row 1-D Associative Array
                    // $row = [
                    //    'id'        => '5',
                    //    'fullName'  => 'Five'
                    // ]
                    // echo $i.' = ' . $row['fullName']. ' ('.$row['id'].')<br>';  
                } ?>
                
                <tr>
                    <td colspan="2" style="text-align: center">
                        There are
                        <b>
                            <?= $result->num_rows ?>
                        </b>
                        record/s found.</td>
                </tr>
            </tbody>
        </table>
        <script>
            async function showInfo(n, id) {
                console.log('showInfo: ' + n + " = " + id);

                // Form Processing (GET & POST)
                const response = await fetch('studentinfoloader.php?id='+id);
                const text = await response.text();

                document.getElementById('info' + n).innerHTML = text;
            }
        </script>
    </main>

    <footer>
        <p>&copy; 2023 by Me. All rights reserved.</p>
        <p>Visit my FB page: <a href="http://fb.me/x">http://fb.me/x</a></p>
    </footer>
</body>
</html>