<?php
$servername = "localhost";
$username = "root";
$password = "0000";
$dbname = "expensetracker";
$port = 3306;

$conn = mysqli_connect($servername, $username, $password, $dbname, $port);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>