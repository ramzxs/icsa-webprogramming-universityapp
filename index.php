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

        main {
            padding: 20px;
        }

        table, td {
            border: 1px solid gray;
        }
        .table-header {
            font-weight: bold;
            color: lightgray;
            background-color: #333333;
        }

        a {
            font-weight: bold;
            text-decoration: none;
            padding: 5px;
            color: white;
            background-color: blueviolet;
            border: 1px solid gray;
            border-radius: 8px;
        }
        a:hover {
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
    </style>
</head>
<body>
    <header>
        <div>Universite App</div>
    </header>

    <main>
        <h1>STUDENTS LIST</h1>

        <table cellspacing="0" cellpadding="10">
            <tr class="table-header">
                <td>STUDENT ID NUMBER</td>
                <td>STUDENT INFO</td>
            </tr>

            <?php
            $DBCONN = mysqli_connect("localhost", "root", "", "universityapp_db");

            $stringSQL = "SELECT id, fullName FROM student ORDER BY id";

            $result = $DBCONN->query($stringSQL); // [ [row1] , [row2], [rowN] ]

            while ($row = $result->fetch_assoc()) {
                ?>

                <tr>
                    <td>
                        <a href="#" onclick="showInfo('<?= $row['id'] ?>')"><?= $row['id'] ?></a>
                    </td>
                    <td id="student<?= $row['id'] ?>" class="info">
                        
                    </td>
                </tr>

                <?php
            }
            ?>
           
        </table>
    </main>
    <script>
        function showInfo(n) {
            document.getElementById('student' + n).innerHTML = "Sample Data for " + n;
        }
    </script>

    <footer>
        &copy; 2023 by Me. All rights reserved.
    </footer>
</body>
</html>