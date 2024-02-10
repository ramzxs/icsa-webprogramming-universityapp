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
        Universite App
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
                $DBCONN = mysqli_connect("localhost", "root", "", "universityapp_db");
                
                $sqlCommand = "SELECT * FROM `student`";

                $result = $DBCONN->query($sqlCommand); // result = all records or rows found (1)
                // [
                //        0 => ['id' = 'A0001', 'fulName' = 'Last, First Middle'],
                //        1 => ['id' = 'A0002', 'fulName' = 'Surname, Given NoMiddle']
                // ]

                if ($result->num_rows > 0) {
                    ?>
                    <tr>
                        <td colspan="2">There are <?php echo $result->num_rows ?> records found.</td>
                    </tr>
                    <?php
                    while ($row = $result->fetch_assoc()) {
                        // row = ['id' = 'A0001', 'fulName' = 'Last, First, Middle']
                        // row = ['id' = 'A0002', 'fulName' = 'Surname, Given NoMiddle']
                        ?>

                        <tr>
                            <td><?php echo $row['id']; ?></td>
                            <td><?= $row['fullName'] ?></td>
                        </tr>

                        <?php
                    }
                } else {
                    echo "<tr><td colspan=\"2\">No records found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </main>
    <script>
        function showInfo(n) {
            console.log("showInfo: which row? " + n);

            document.getElementById('student'+n).innerHTML = "Do something here " + (new Date).getTime();
        }
    </script>

    <footer>
        <p>&copy; 2023 by Me. All rights reserved.</p>
        <p>Visit my FB page: <a href="http://fb.me/x">http://fb.me/x</a></p>
    </footer>
</body>
</html>