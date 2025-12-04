<?php

$amount = $_POST['amount'];
$description = $_POST['description'];
$expense_date = $_POST['expense_date'];

include("dbcon.php");

$sql = "insert into expenses(amount,description,expense_date) values ";
$sql .= "('$amount','$description','$expense_date')";

if (mysqli_query($conn, $sql)) {
  echo "Expense added successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>