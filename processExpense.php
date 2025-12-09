<?php

$amount = $_POST['amount'];
$description = $_POST['description'];
$expense_date = $_POST['expense_date'];
$category_id = $_POST['category_id'];

include("dbcon.php");

$sql = "insert into expenses(amount,description,expense_date,category_id) values ";
$sql .= "('$amount','$description','$expense_date','$category_id')";

if (mysqli_query($conn, $sql)) {
  echo "Expense added successfully<br><br>";
  echo "<a href='viewExpenses.php' class='btn btn-default'>View All Expenses</a> ";
  echo "<a href='addExpense.php' class='btn btn-default'>Add Another Expense</a>";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>