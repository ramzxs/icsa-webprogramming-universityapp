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
                    <td>MOBILE #</td>
                </tr>
            </thead>
            <tbody>
                <?php
                // Single-Dimensional Array
                //               0                1    
                $student1 = ['0001', 'First Student'];
                $student2 = [0 => '0002', 1 => 'Second Student'];
                ?>
                <tr>
                    <td>
                        <a href="#" onclick="" class="student-id">
                            <?php echo $student1[0]; ?>
                        </a>
                    </td>
                    <td class="info">
                        <?php echo $student1[1]; ?>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="#" onclick="" class="student-id">
                            <?php echo $student2[0]; ?>
                        </a>
                    </td>
                    <td class="info">
                        <?php echo $student2[1]; ?>
                    </td>
                </tr>

                <tr>
                    <td colspan="3" style="text-align: center">
                        There are
                        <b>
                            2
                        </b>
                        record/s found.
                    </td>
                </tr>
            </tbody>
        </table>
    </main>

    <footer>
        <p>&copy; 2023 by Me. All rights reserved.</p>
        <p>Visit my FB page: <a href="http://fb.me/x">http://fb.me/x</a></p>
    </footer>
</body>
</html>