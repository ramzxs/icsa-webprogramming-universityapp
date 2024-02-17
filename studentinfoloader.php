<?php

$DB = mysqli_connect('127.0.0.1', 'root', '', 'universityapp_db') or die("Database Connection Error");

$result = $DB->query("SELECT * FROM student WHERE id = '".$_GET['id']."'");

$row = $result->fetch_assoc();

echo strtoupper($row['nameLast']).',<br>'.$row['nameFirst'].', '.$row['nameMiddle'];