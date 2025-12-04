<?php

$amount = $_POST['amount'];
$description = $_POST['description'];

include("dbcon.php");

$sql = "insert into expenses(amount,description) values ";
$sql .= "('$amount','$description')";

if (mysqli_query($conn, $sql)) {
  echo "Expense added successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>